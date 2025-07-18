document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const mobileNewChat = document.querySelector('.mobile-new-chat');
    const chatbox = document.getElementById('chatbox');
    const chatForm = document.getElementById('chatForm');
    const userInput = document.getElementById('userInput');

    function sanitizeText(input) {
        const div = document.createElement('div');
        div.textContent = input;
        return div.innerHTML;
    }

    function updateSidebarToggle() {
        const isCollapsed = sidebar.classList.contains('collapsed');
        sidebarToggle.classList.toggle('sidebar-open', !isCollapsed);
        const tooltip = sidebarToggle.querySelector('.tooltip');
        if (tooltip) tooltip.textContent = isCollapsed ? "Ouvrir l'historique" : "Fermer l'historique";

        if (window.innerWidth <= 768) {
            mobileNewChat.style.display = isCollapsed ? 'flex' : 'none';
        }
    }

    sidebarToggle.addEventListener('click', function () {
        sidebar.classList.toggle('collapsed');
        sidebar.classList.toggle('show-mobile');
        updateSidebarToggle();
    });

    document.getElementById('new-chat-btn').addEventListener('click', startNewConversation);
    mobileNewChat.addEventListener('click', startNewConversation);

    loadConversationHistory();
    startNewConversation();

    chatForm.addEventListener('submit', async function (e) {
        e.preventDefault();
        const message = userInput.value.trim();
        if (!message) return;

        displayMessage(message, 'user');
        userInput.value = '';

        const typingElement = createTypingIndicator();
        chatbox.appendChild(typingElement);
        scrollToBottom();

        try {
            const response = await fetch('includes/request-treatment.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    userMessage: message,
                    sessionId: chatbox.dataset.conversationId
                })
            });

            const data = await response.json();
            chatbox.removeChild(typingElement);

            if (data.success) {
                displayMessage(data.response, 'bot');
                loadConversationHistory();
            } else {
                displayMessage(`Erreur: ${sanitizeText(data.error)}`, 'bot', true);
            }
        } catch (error) {
            console.error('Erreur réseau:', error);
            chatbox.removeChild(typingElement);
            displayMessage("Erreur de connexion au serveur", 'bot', true);
        }
    });

    function displayMessage(content, sender, isError = false) {
    const messageElement = document.createElement('div');
    messageElement.className = `message ${sender} ${isError ? 'error' : ''}`;

    // Nouveau : Ajout d'un conteneur interne pour meilleur contrôle du style
    const contentContainer = document.createElement('div');
    contentContainer.className = 'message-content';

    if (sender === 'bot') {
        try {
            const sanitized = sanitizeText(content);
            
            // Nouveau : Transformation des URLs en vrais liens (sécurisé)
            const withLinks = sanitized.replace(
                /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig,
                '<a href="$1" target="_blank" rel="noopener noreferrer">$1</a>'
            );
            
            // Nouveau : Support des liens spéciaux pour le formulaire
            const finalContent = withLinks.replace(
                /\[formulaire\]/gi,
                '<a href="/form-handler.php" class="form-link" target="_blank">Formulaire de signalement</a>'
            );

            contentContainer.innerHTML = marked.parse(finalContent);
        } catch (e) {
            contentContainer.textContent = 'Réponse invalide.';
            console.error('Erreur de parsing:', e);
        }
    } else {
        contentContainer.textContent = sanitizeText(content);
    }

    // Nouveau : Ajout du timestamp
    const timestamp = document.createElement('div');
    timestamp.className = 'message-timestamp';
    timestamp.textContent = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    
    messageElement.appendChild(contentContainer);
    messageElement.appendChild(timestamp);
    chatbox.appendChild(messageElement);
    scrollToBottom();
}

    function createTypingIndicator() {
        const element = document.createElement('div');
        element.className = 'typing-indicator';
        element.innerHTML = `
            <img src="img/favicon.png" class="typing-icon" alt="Typing...">
            <span>Absa est en train d'écrire</span>
            <span class="dot-container">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </span>
        `;
        return element;
    }

    async function loadConversationHistory() {
        try {
            const response = await fetch('includes/get-conversations.php');
            const conversations = await response.json();
            const historyContainer = document.getElementById('conversation-history');
            const currentConvId = chatbox.dataset.conversationId;

            if (!Array.isArray(conversations) || conversations.length === 0) {
                historyContainer.innerHTML = '<div class="no-conversations">Aucune conversation précédente</div>';
                return;
            }

            const groupedConversations = groupConversationsByDate(conversations);
            let html = '';

            for (const [groupTitle, groupItems] of Object.entries(groupedConversations)) {
                html += `<div class="date-group">
                    <div class="date-group-title">${sanitizeText(groupTitle)}</div>`;
                groupItems.forEach(conv => {
                    if (conv.id !== currentConvId) {
                        html += `
                        <div class="conversation-item" data-id="${sanitizeText(conv.id)}">
                            ${sanitizeText(generateConversationTitle(conv.preview || conv.content))}
                        </div>`;
                    }
                });
                html += '</div>';
            }

            historyContainer.innerHTML = html;

            document.querySelectorAll('.conversation-item').forEach(item => {
                item.addEventListener('click', async () => {
                    await loadConversation(item.dataset.id);
                    if (window.innerWidth <= 768) {
                        sidebar.classList.remove('show-mobile');
                        updateSidebarToggle();
                    }
                });
            });
        } catch (error) {
            console.error('Erreur chargement historique:', error);
        }
    }

    function groupConversationsByDate(conversations) {
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        const yesterday = new Date(today);
        yesterday.setDate(yesterday.getDate() - 1);

        const lastWeek = new Date(today);
        lastWeek.setDate(lastWeek.getDate() - 7);

        const lastMonth = new Date(today);
        lastMonth.setMonth(lastMonth.getMonth() - 1);

        const groups = {
            "Aujourd'hui": [],
            "Hier": [],
            "Cette semaine": [],
            "Ce mois-ci": [],
            "Plus ancien": []
        };

        conversations.forEach(conv => {
            const convDate = new Date(conv.created_at);
            convDate.setHours(0, 0, 0, 0);

            if (convDate.getTime() === today.getTime()) {
                groups["Aujourd'hui"].push(conv);
            } else if (convDate.getTime() === yesterday.getTime()) {
                groups["Hier"].push(conv);
            } else if (convDate > lastWeek) {
                groups["Cette semaine"].push(conv);
            } else if (convDate > lastMonth) {
                groups["Ce mois-ci"].push(conv);
            } else {
                groups["Plus ancien"].push(conv);
            }
        });

        for (const group in groups) {
            if (groups[group].length === 0) {
                delete groups[group];
            }
        }

        return groups;
    }

    function generateConversationTitle(content) {
        if (!content) return "Discussion sans titre";

        const cleanContent = content.replace(/[^À-ſa-zA-Z0-9\s]/gi, '').replace(/\s+/g, ' ').trim();
        const words = cleanContent.split(' ').filter(w => w.length > 3);

        if (words.length >= 3) {
            return words.slice(0, 3).join(' ') + '...';
        } else if (cleanContent.length > 20) {
            return cleanContent.substring(0, 20) + '...';
        }

        return cleanContent || "Nouvelle discussion";
    }

    async function loadConversation(conversationId) {
        try {
            const response = await fetch(`includes/get-conversation.php?id=${encodeURIComponent(conversationId)}`);
            const data = await response.json();

            chatbox.innerHTML = '';
            chatbox.dataset.conversationId = conversationId;

            if (Array.isArray(data.messages)) {
                data.messages.forEach(msg => {
                    displayMessage(msg.content, msg.sender);
                });
            } else {
                displayMessage("Conversation invalide ou vide", 'bot', true);
            }

            loadConversationHistory();
        } catch (error) {
            console.error('Erreur chargement conversation:', error);
            displayMessage("Erreur lors du chargement de la conversation", 'bot', true);
        }
    }

    function startNewConversation() {
        const newId = 'conv_' + Date.now();
        chatbox.innerHTML = '';
        chatbox.dataset.conversationId = newId;

        fetch('includes/save-message.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                sessionId: newId,
                sender: 'system',
                content: 'Nouvelle discussion démarrée'
            })
        }).then(() => loadConversationHistory());
    }

    function scrollToBottom() {
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    function adjustHeight() {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    window.addEventListener('resize', function () {
        adjustHeight();
        updateSidebarToggle();
    });

    adjustHeight();
    updateSidebarToggle();
});
