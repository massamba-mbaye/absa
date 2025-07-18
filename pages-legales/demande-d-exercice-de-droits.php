<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'exercice de droits - Polaris Association</title>
    <style>
        :root {
            /* Couleurs Polaris Association */
            --primary-color: #65c8d0;
            --secondary-color: #3b1053;
            --background-color: #f8fafb;
            --text-color: #2d3748;
            --white: #ffffff;
            --light-gray: #f7fafc;
            --border-color: #e2e8f0;
            
            /* Couleurs pour alertes et états */
            --success-color: #48bb78;
            --warning-color: #ed8936;
            --error-color: #f56565;
            --info-color: #4299e1;
            
            /* Typographie */
            --font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            --font-size-base: 16px;
            --line-height: 1.6;
            
            /* Espacement */
            --spacing-xs: 0.5rem;
            --spacing-sm: 1rem;
            --spacing-md: 1.5rem;
            --spacing-lg: 2rem;
            --spacing-xl: 3rem;
            
            /* Bordures */
            --border-radius: 12px;
            --border-radius-lg: 16px;
            
            /* Ombres */
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07), 0 1px 3px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            font-size: var(--font-size-base);
            line-height: var(--line-height);
            color: var(--text-color);
            background-color: var(--background-color);
            antialiased: true;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: var(--spacing-md);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--white);
            padding: var(--spacing-xl) var(--spacing-lg);
            text-align: center;
            margin-bottom: var(--spacing-xl);
            border-radius: var(--border-radius-lg);
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            opacity: 0.3;
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: var(--spacing-xs);
            letter-spacing: -0.025em;
        }

        .header p {
            font-size: 1.25rem;
            color: #fff;
            font-weight: 400;
        }

        /* Content */
        .content {
            background: var(--white);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: var(--spacing-xl);
        }

        .content-inner {
            padding: var(--spacing-xl);
        }

        /* Intro box */
        .intro-box {
            background: linear-gradient(135deg, #ebf8ff 0%, #bee3f8 100%);
            border: 1px solid #90cdf4;
            border-left: 4px solid var(--info-color);
            padding: var(--spacing-lg);
            border-radius: var(--border-radius);
            margin-bottom: var(--spacing-xl);
        }

        .intro-box h3 {
            color: var(--info-color);
            margin-bottom: var(--spacing-md);
            font-size: 1.25rem;
        }

        /* Typography */
        h2 {
            color: var(--secondary-color);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: var(--spacing-lg);
            padding-bottom: var(--spacing-sm);
            border-bottom: 2px solid var(--border-color);
            letter-spacing: -0.025em;
        }

        h3 {
            color: var(--text-color);
            font-size: 1.5rem;
            font-weight: 600;
            margin: var(--spacing-xl) 0 var(--spacing-md) 0;
            position: relative;
            padding-left: var(--spacing-md);
        }

        h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        h4 {
            color: var(--text-color);
            font-size: 1.25rem;
            font-weight: 600;
            margin: var(--spacing-lg) 0 var(--spacing-sm) 0;
        }

        p {
            margin-bottom: var(--spacing-md);
            color: #4a5568;
        }

        ul, ol {
            margin: var(--spacing-md) 0;
            padding-left: var(--spacing-lg);
        }

        li {
            margin-bottom: var(--spacing-sm);
            color: #4a5568;
        }

        strong {
            color: var(--text-color);
            font-weight: 600;
        }

        /* Special boxes */
        .success-box {
            background: linear-gradient(135deg, #f0fff4 0%, #c6f6d5 100%);
            border: 1px solid #9ae6b4;
            border-left: 4px solid var(--success-color);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin: var(--spacing-lg) 0;
        }

        .warning-box {
            background: linear-gradient(135deg, #fffaf0 0%, #feebc8 100%);
            border: 1px solid #f6ad55;
            border-left: 4px solid var(--warning-color);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin: var(--spacing-lg) 0;
        }

        .warning-box h4 {
            color: var(--warning-color);
            margin-bottom: var(--spacing-sm);
        }

        .highlight-box {
            background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
            border: 1px solid #feb2b2;
            border-left: 4px solid var(--error-color);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin: var(--spacing-lg) 0;
        }

        .info-box {
            background: linear-gradient(135deg, #ebf8ff 0%, #bee3f8 100%);
            border: 1px solid #90cdf4;
            border-left: 4px solid var(--info-color);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin: var(--spacing-lg) 0;
        }

        /* Rights grid */
        .rights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-md);
            margin: var(--spacing-lg) 0;
        }

        .right-card {
            background: var(--light-gray);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary-color);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .right-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .right-card h4 {
            color: var(--primary-color);
            margin-bottom: var(--spacing-sm);
            font-size: 1.1rem;
        }

        /* Form styles */
        .form-container {
            background: var(--light-gray);
            padding: var(--spacing-xl);
            border-radius: var(--border-radius-lg);
            margin: var(--spacing-xl) 0;
            border: 1px solid var(--border-color);
        }

        .form-group {
            margin-bottom: var(--spacing-lg);
        }

        .form-group label {
            display: block;
            margin-bottom: var(--spacing-sm);
            color: var(--text-color);
            font-weight: 600;
            font-size: 1rem;
        }

        .required {
            color: var(--error-color);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: var(--spacing-md);
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background: var(--white);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(101, 200, 208, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-group small {
            display: block;
            margin-top: var(--spacing-xs);
            color: #718096;
            font-size: 0.9rem;
        }

        .btn {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--white);
            padding: var(--spacing-md) var(--spacing-xl);
            border: none;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .btn-loading {
            color: transparent;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid transparent;
            border-top-color: var(--white);
            border-radius: 50%;
            animation: button-loading-spinner 1s ease infinite;
        }

        @keyframes button-loading-spinner {
            from {
                transform: rotate(0turn);
            }
            to {
                transform: rotate(1turn);
            }
        }

        /* Alert */
        .alert {
            padding: var(--spacing-md);
            margin-bottom: var(--spacing-lg);
            border-radius: var(--border-radius);
            display: none;
            animation: slideDown 0.3s ease;
        }

        .alert.success {
            background: linear-gradient(135deg, #f0fff4 0%, #c6f6d5 100%);
            color: #22543d;
            border: 1px solid #9ae6b4;
            border-left: 4px solid var(--success-color);
        }

        .alert.error {
            background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
            color: #742a2a;
            border: 1px solid #feb2b2;
            border-left: 4px solid var(--error-color);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Contact sections */
        .contact-section {
            background: linear-gradient(135deg, var(--light-gray) 0%, #e6fffa 100%);
            border: 1px solid #81e6d9;
            border-left: 4px solid var(--primary-color);
            padding: var(--spacing-lg);
            border-radius: var(--border-radius);
            margin: var(--spacing-xl) 0;
        }

        .contact-section h4 {
            color: var(--secondary-color);
            margin-bottom: var(--spacing-md);
            font-size: 1.25rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: var(--spacing-md);
            margin-top: var(--spacing-md);
        }

        .contact-card {
            background: var(--white);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary-color);
            box-shadow: var(--shadow-sm);
        }

        .contact-card h4 {
            color: var(--primary-color);
            margin-bottom: var(--spacing-sm);
            font-size: 1.1rem;
        }

        /* Timeline */
        .timeline {
            background: var(--light-gray);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin: var(--spacing-lg) 0;
            border-left: 4px solid var(--success-color);
        }

        .timeline h4 {
            color: var(--success-color);
            margin-bottom: var(--spacing-sm);
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: var(--spacing-xl);
            background: var(--white);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            color: #718096;
        }

        .footer p {
            margin-bottom: var(--spacing-xs);
            font-size: 0.9rem;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 50%;
            width: 56px;
            height: 56px;
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            font-size: 1.25rem;
            font-weight: bold;
            z-index: 1000;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: var(--spacing-sm);
            }
            
            .content-inner {
                padding: var(--spacing-lg);
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.75rem;
            }

            .rights-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .form-container {
                padding: var(--spacing-lg);
            }

            .back-to-top {
                bottom: 1rem;
                right: 1rem;
                width: 48px;
                height: 48px;
                font-size: 1rem;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Focus styles for accessibility */
        button:focus,
        a:focus,
        input:focus,
        textarea:focus,
        select:focus {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-content">
                <h1>Demande d'exercice de droits</h1>
                <p>Polaris Association - Vos droits sur vos données personnelles</p>
            </div>
        </header>

        <main class="content">
            <div class="content-inner">
                <div class="intro-box">
                    <h3>🛡️ Vos droits sur vos données personnelles</h3>
                    <p>Conformément à la législation sénégalaise sur la protection des données personnelles et aux recommandations de la Commission de Protection des Données Personnelles (CDP), vous disposez de droits sur vos données personnelles.</p>
                    <p><strong>Délai de traitement :</strong> 30 jours maximum - <strong>Service gratuit</strong></p>
                </div>

                <h2>Vos droits selon la loi sénégalaise</h2>
                <p>La législation sénégalaise vous garantit les droits suivants sur vos données personnelles :</p>

                <div class="rights-grid">
                    <div class="right-card">
                        <h4>👁️ Droit d'accès</h4>
                        <p>Obtenir une copie des données personnelles que nous détenons sur vous, connaître leur utilisation et leur origine.</p>
                    </div>
                    <div class="right-card">
                        <h4>✏️ Droit de rectification</h4>
                        <p>Corriger, modifier ou compléter des données inexactes, incomplètes ou obsolètes vous concernant.</p>
                    </div>
                    <div class="right-card">
                        <h4>🗑️ Droit d'effacement</h4>
                        <p>Demander la suppression de vos données personnelles (sauf en cas d'obligations légales de conservation).</p>
                    </div>
                    <div class="right-card">
                        <h4>⛔ Droit d'opposition</h4>
                        <p>Vous opposer au traitement de vos données pour des motifs légitimes liés à votre situation particulière.</p>
                    </div>
                    <div class="right-card">
                        <h4>🚫 Retrait du consentement</h4>
                        <p>Retirer votre consentement à tout moment pour les traitements basés sur votre accord.</p>
                    </div>
                    <div class="right-card">
                        <h4>📦 Droit à la portabilité</h4>
                        <p>Récupérer vos données dans un format structuré, couramment utilisé et lisible par machine.</p>
                    </div>
                </div>

                <div class="warning-box">
                    <h4>⚠️ Spécificité de nos services anonymes</h4>
                    <p>Polaris Association a conçu ses services pour préserver votre anonymat. Si vous n'avez fourni aucune donnée d'identification (numéro de téléphone, nom, email), il se peut que nous ne détenions aucune donnée personnelle permettant de vous identifier.</p>
                    <p>Dans ce cas, l'exercice de certains droits peut être limité par l'impossibilité technique d'identifier vos données.</p>
                </div>

                <h3>Formulaire de demande</h3>
                
                <div class="alert success" id="successAlert">
                    <strong>✅ Demande envoyée avec succès !</strong> Votre demande d'exercice de droits a été transmise à notre équipe et un email de confirmation a été envoyé. Vous recevrez une réponse dans les plus brefs délais, conformément à la réglementation sénégalaise (délai maximum : 30 jours).
                </div>

                <div class="alert error" id="errorAlert">
                    <strong>❌ Erreur lors de l'envoi !</strong> Une erreur s'est produite lors de l'envoi de votre demande. Veuillez réessayer ou nous contacter directement.
                </div>

                <div class="form-container">
                    <form id="rightsForm">
                        <div class="form-group">
                            <label for="nom">Nom complet <span class="required">*</span></label>
                            <input type="text" id="nom" name="nom" required placeholder="Votre nom et prénom">
                            <small>Obligatoire pour traiter votre demande</small>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" id="email" name="email" placeholder="votre.email@exemple.com">
                            <small>Optionnel - Uniquement si vous souhaitez une réponse par email. Sinon, nous répondrons par courrier postal.</small>
                        </div>

                        <div class="form-group">
                            <label for="telephone">Numéro de téléphone utilisé avec ABSA</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="+221 XX XXX XX XX">
                            <small>Si vous avez utilisé WhatsApp ou fourni votre numéro lors de vos échanges avec notre agent conversationnel</small>
                        </div>

                        <div class="form-group">
                            <label for="typeDemande">Type de demande <span class="required">*</span></label>
                            <select id="typeDemande" name="typeDemande" required>
                                <option value="">Sélectionnez le droit que vous souhaitez exercer</option>
                                <option value="acces">🔍 Droit d'accès - Consulter mes données</option>
                                <option value="rectification">✏️ Droit de rectification - Corriger mes données</option>
                                <option value="suppression">🗑️ Droit d'effacement - Supprimer mes données</option>
                                <option value="opposition">⛔ Droit d'opposition - M'opposer au traitement</option>
                                <option value="retrait_consentement">🚫 Retrait du consentement</option>
                                <option value="portabilite">📦 Droit à la portabilité - Récupérer mes données</option>
                                <option value="limitation">⏸️ Droit à la limitation du traitement</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="periode">Période concernée</label>
                            <input type="text" id="periode" name="periode" placeholder="Ex: Mars 2025, ou entre le 1er juin et le 15 juillet 2025">
                            <small>Aidez-nous à identifier vos données en précisant quand vous avez utilisé nos services</small>
                        </div>

                        <div class="form-group">
                            <label for="motif">Motif et informations pour identifier vos données <span class="required">*</span></label>
                            <textarea id="motif" name="motif" required placeholder="Décrivez votre demande et aidez-nous à identifier vos données...

Exemples d'informations utiles :
- Date approximative de vos échanges avec ABSA
- Sujet ou thème abordé lors de la conversation
- Plateforme utilisée (site web, WhatsApp)
- Toute autre information qui pourrait nous aider à localiser vos données

Motif de votre demande :
- Pourquoi souhaitez-vous exercer ce droit ?
- Avez-vous des préoccupations particulières ?"></textarea>
                            <small>Plus vous nous donnez d'informations, plus nous pourrons traiter efficacement votre demande</small>
                        </div>

                        <div class="form-group">
                            <label for="justificatif">Pièce justificative d'identité</label>
                            <input type="file" id="justificatif" name="justificatif" accept=".pdf,.jpg,.jpeg,.png">
                            <small>Document officiel recommandé : Carte d'identité sénégalaise, passeport, permis de conduire, ou autre document délivré par une autorité publique (pour vérifier votre identité)</small>
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse postale</label>
                            <textarea id="adresse" name="adresse" placeholder="Votre adresse complète au Sénégal ou à l'étranger" rows="3"></textarea>
                            <small>Nécessaire si vous n'avez pas fourni d'email, pour vous envoyer notre réponse par courrier</small>
                        </div>

                        <div class="timeline">
                            <h4>⏱️ Délai de traitement :</h4>
                            <p><strong>Maximum 30 jours</strong> conformément à la législation sénégalaise. Nous nous efforçons de répondre plus rapidement selon la complexité de votre demande.</p>
                        </div>

                        <button type="submit" class="btn" id="submitBtn">📤 Envoyer ma demande</button>
                    </form>
                </div>

                <h3>Informations importantes sur le traitement de votre demande</h3>

                <h4>🔍 Identification de vos données</h4>
                <p>Pour traiter votre demande, nous devons pouvoir identifier avec certitude vos données personnelles dans nos systèmes. Cela peut être difficile en raison de notre architecture "anonymat by design" :</p>
                <ul>
                    <li><strong>Conversations anonymes :</strong> Si vous n'avez fourni aucun élément d'identification, nous ne pourrons pas localiser vos données</li>
                    <li><strong>Données identifiables :</strong> Si vous avez communiqué votre numéro de téléphone ou utilisé WhatsApp, nous pourrons identifier vos échanges</li>
                    <li><strong>Informations complémentaires :</strong> Plus vous nous donnez de détails (date, sujet abordé), plus nous pourrons vous aider</li>
                </ul>

                <h4>📋 Processus de traitement</h4>
                <div class="timeline">
                    <ol>
                        <li><strong>Réception :</strong> Accusé de réception dans les 48h</li>
                        <li><strong>Vérification :</strong> Contrôle de votre identité et recherche de vos données (5-10 jours)</li>
                        <li><strong>Analyse :</strong> Examen de la faisabilité juridique et technique (5-15 jours)</li>
                        <li><strong>Réponse :</strong> Envoi de notre réponse motivée (dans les 30 jours maximum)</li>
                    </ol>
                </div>

                <h4>⚖️ Limites légales</h4>
                <div class="warning-box">
                    <h4>Cas où nous ne pouvons pas donner suite :</h4>
                    <ul>
                        <li><strong>Obligations légales :</strong> Conservation imposée par la loi sénégalaise</li>
                        <li><strong>Sécurité publique :</strong> Données nécessaires pour la protection des personnes</li>
                        <li><strong>Procédures judiciaires :</strong> Données dans le cadre d'enquêtes en cours</li>
                        <li><strong>Droits de tiers :</strong> Protection de l'anonymat d'autres utilisateurs</li>
                        <li><strong>Impossibilité technique :</strong> Données déjà anonymisées de façon irréversible</li>
                    </ul>
                </div>

                <h3>Recours et réclamations</h3>

                <h4>🏛️ Si vous n'êtes pas satisfait de notre réponse</h4>
                <p>Vous disposez de plusieurs recours :</p>

                <div class="contact-section">
                    <h4>Autorités de contrôle</h4>
                    <div class="contact-grid">
                        <div class="contact-card">
                            <h4>Commission de Protection des Données Personnelles (CDP)</h4>
                            <p><strong>Email :</strong> contactcdp@cdp.sn<br>
                            <strong>Site web :</strong> www.cdp.sn<br>
                            <strong>Rôle :</strong> Autorité de contrôle pour la protection des données au Sénégal</p>
                        </div>
                        <div class="contact-card">
                            <h4>Tribunaux sénégalais</h4>
                            <p><strong>Recours contentieux :</strong> Action en justice devant les juridictions compétentes<br>
                            <strong>Délai :</strong> Dans les délais légaux de prescription<br>
                            <strong>Conseil :</strong> Consultez un avocat spécialisé</p>
                        </div>
                    </div>
                </div>

                <h3>Contacts Polaris Association</h3>

                <div class="contact-section">
                    <h4>Pour toute question sur vos données personnelles</h4>
                    <div class="contact-grid">
                        <div class="contact-card">
                            <h4>🛡️ Délégué à la Protection des Données</h4>
                            <p><strong>Ange Fiacre NOUGBODOHOUE</strong><br>
                            Email : ange@polaris-asso.org<br>
                            Téléphone : +221 78 109 90 15<br>
                            <em>Contact privilégié pour toutes vos questions sur la protection des données</em></p>
                        </div>
                        <div class="contact-card">
                            <h4>📧 Contact général</h4>
                            <p><strong>Polaris Association</strong><br>
                            Email : hello@polaris-asso.org<br>
                            Téléphone : +221 77 410 25 26<br>
                            <em>Pour toute autre question sur nos services</em></p>
                        </div>
                        <div class="contact-card">
                            <h4>📮 Adresse postale</h4>
                            <p><strong>Polaris Association</strong><br>
                            Ngor Almadie, Rue 109<br>
                            Dakar, Sénégal<br>
                            <em>Pour vos courriers officiels</em></p>
                        </div>
                    </div>
                </div>

                <h3>Conseils pour une demande efficace</h3>

                <div class="success-box">
                    <h4>💡 Pour maximiser vos chances d'obtenir une réponse complète :</h4>
                    <ul>
                        <li><strong>Soyez précis :</strong> Indiquez des dates, des sujets de conversation, la plateforme utilisée</li>
                        <li><strong>Joignez une pièce d'identité :</strong> Cela accélère la vérification de votre identité</li>
                        <li><strong>Expliquez votre motivation :</strong> Pourquoi souhaitez-vous exercer ce droit ?</li>
                        <li><strong>Un seul droit par demande :</strong> Pour un traitement plus rapide et efficace</li>
                        <li><strong>Restez poli et constructif :</strong> Cela facilite le dialogue et la résolution</li>
                    </ul>
                </div>

                <h3>Questions fréquentes</h3>

                <h4>❓ Que se passe-t-il si vous ne trouvez aucune donnée me concernant ?</h4>
                <p>Nous vous l'indiquerons dans notre réponse. Cela peut arriver si vous avez utilisé nos services de manière totalement anonyme ou si vos données ont déjà été supprimées automatiquement.</p>

                <h4>❓ Puis-je faire une demande pour une autre personne ?</h4>
                <p>Seulement si vous avez un mandat légal (tuteur, curateur) ou une procuration notariée. Pour les mineurs, les parents ou représentants légaux peuvent agir.</p>

                <h4>❓ La demande est-elle payante ?</h4>
                <p>Non, l'exercice de vos droits est entièrement gratuit. Seuls des frais de photocopie ou d'envoi postal peuvent être facturés dans certains cas exceptionnels.</p>

                <h4>❓ Que faire en cas d'urgence ?</h4>
                <p>Si votre demande concerne une situation d'urgence (sécurité, danger), contactez directement notre délégué à la protection des données par téléphone au +221 78 109 90 15.</p>

            </div>
        </main>

        <footer class="footer">
            <p>&copy; 2025 Polaris Association. Tous droits réservés.</p>
            <p>Formulaire conforme à la législation sénégalaise sur la protection des données personnelles</p>
            <p>En partenariat avec la Commission de Protection des Données Personnelles (CDP) du Sénégal</p>
        </footer>
    </div>

    <button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Retour en haut">
        ↑
    </button>

    <script>
        // Configuration des placeholders dynamiques selon le type de demande
        const placeholders = {
            'acces': `Je souhaite consulter toutes les données personnelles que vous détenez sur moi.

Informations pour identifier mes données :
- Date de mes échanges avec ABSA : 
- Sujet abordé : 
- Plateforme utilisée : 
- Autre information utile : `,
            
            'rectification': `Je souhaite corriger des informations inexactes me concernant.

Données à rectifier :
- Information incorrecte actuelle : 
- Correction souhaitée : 
- Justification : 

Informations pour identifier mes données :
- Date de mes échanges : 
- Plateforme utilisée : `,
            
            'suppression': `Je demande la suppression de mes données personnelles.

Motif de la demande :
- Raison de la suppression : 
- Données concernées : 

Informations pour identifier mes données :
- Date de mes échanges avec ABSA : 
- Sujet abordé : 
- Plateforme utilisée : `,
            
            'opposition': `Je m'oppose au traitement de mes données personnelles.

Motif légitime de mon opposition :
- Raison de l'opposition : 
- Situation particulière : 

Informations pour identifier mes données :
- Date de mes échanges : 
- Type de données concernées : `,
            
            'retrait_consentement': `Je retire mon consentement au traitement de mes données.

Consentement à retirer :
- Type de traitement concerné : 
- Date du consentement initial : 

Informations pour identifier mes données :
- Date de mes échanges avec ABSA : 
- Données concernées : `,
            
            'portabilite': `Je souhaite récupérer mes données dans un format lisible.

Format souhaité :
- JSON, CSV, PDF : 
- Destination des données : 

Informations pour identifier mes données :
- Date de mes échanges : 
- Type de données à récupérer : `
        };

        // Mise à jour du placeholder selon le type de demande
        document.getElementById('typeDemande').addEventListener('change', function() {
            const motifTextarea = document.getElementById('motif');
            const type = this.value;
            
            if (placeholders[type]) {
                motifTextarea.placeholder = placeholders[type];
            }
        });

        // Gestionnaire de soumission du formulaire
        document.getElementById('rightsForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submitBtn');
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
            
            // Masquer les alertes précédentes
            successAlert.style.display = 'none';
            errorAlert.style.display = 'none';
            
            // Validation basique
            const nom = document.getElementById('nom').value.trim();
            const typeDemande = document.getElementById('typeDemande').value;
            const motif = document.getElementById('motif').value.trim();
            
            if (!nom || !typeDemande || !motif) {
                errorAlert.innerHTML = '<strong>⚠️ Erreur de validation !</strong> Veuillez remplir tous les champs obligatoires (marqués d\'un *).';
                errorAlert.style.display = 'block';
                errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return;
            }
            
            // État de chargement
            submitBtn.disabled = true;
            submitBtn.classList.add('btn-loading');
            
            try {
                // Collecte des données du formulaire
                const formData = new FormData();
                
                // Données du formulaire
                formData.append('nom', nom);
                formData.append('email', document.getElementById('email').value);
                formData.append('telephone', document.getElementById('telephone').value);
                formData.append('typeDemande', typeDemande);
                formData.append('periode', document.getElementById('periode').value);
                formData.append('motif', motif);
                formData.append('adresse', document.getElementById('adresse').value);
                formData.append('dateSubmission', new Date().toISOString());
                
                // Fichier justificatif s'il y en a un
                const fileInput = document.getElementById('justificatif');
                if (fileInput.files[0]) {
                    formData.append('justificatif', fileInput.files[0]);
                }

                // Simulation de l'envoi - À remplacer par votre endpoint réel
                const response = await simulateFormSubmission(formData);
                
                if (response.success) {
                    // Succès
                    successAlert.style.display = 'block';
                    successAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Reset du formulaire
                    this.reset();
                    
                    // Auto-masquer l'alerte après 10 secondes
                    setTimeout(() => {
                        successAlert.style.display = 'none';
                    }, 10000);
                } else {
                    throw new Error(response.message || 'Erreur lors de l\'envoi');
                }
                
            } catch (error) {
                console.error('Erreur lors de l\'envoi:', error);
                errorAlert.innerHTML = '<strong>❌ Erreur technique !</strong> ' + (error.message || 'Une erreur s\'est produite lors de l\'envoi de votre demande. Veuillez réessayer ou nous contacter directement.');
                errorAlert.style.display = 'block';
                errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Auto-masquer l'alerte d'erreur après 8 secondes
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 8000);
            } finally {
                // Restaurer le bouton
                submitBtn.disabled = false;
                submitBtn.classList.remove('btn-loading');
            }
        });

        // Fonction de simulation - À remplacer par votre vraie API
        async function simulateFormSubmission(formData) {
            return new Promise((resolve, reject) => {
                setTimeout(() => {
                    // Simulation d'un envoi réussi
                    // Dans la vraie implémentation, vous devez :
                    // 1. Envoyer les données à votre serveur
                    // 2. Sauvegarder en base SQLite
                    // 3. Envoyer les emails à hello@polaris-asso.org et massamba@polaris-asso.org
                    
                    const success = Math.random() > 0.1; // 90% de chances de succès
                    
                    if (success) {
                        resolve({ 
                            success: true, 
                            message: 'Demande envoyée avec succès',
                            id: 'DR-' + Date.now()
                        });
                    } else {
                        reject(new Error('Erreur de simulation'));
                    }
                }, 1500); // Simulation d'un délai réseau
            });
        }

        /* 
        IMPLÉMENTATION CÔTÉ SERVEUR REQUISE :
        
        1. ENDPOINT API (ex: POST /api/demande-droits)
           - Recevoir les données du FormData
           - Valider les données côté serveur
           - Sauvegarder en base SQLite
           - Envoyer les emails
           - Retourner une réponse JSON
        
        2. BASE DE DONNÉES SQLite :
           CREATE TABLE demandes_droits (
               id INTEGER PRIMARY KEY AUTOINCREMENT,
               nom TEXT NOT NULL,
               email TEXT,
               telephone TEXT,
               type_demande TEXT NOT NULL,
               periode TEXT,
               motif TEXT NOT NULL,
               adresse TEXT,
               justificatif_filename TEXT,
               date_submission DATETIME NOT NULL,
               statut TEXT DEFAULT 'en_attente',
               date_traitement DATETIME,
               reponse TEXT,
               created_at DATETIME DEFAULT CURRENT_TIMESTAMP
           );
        
        3. ENVOI D'EMAILS :
           - Email à hello@polaris-asso.org
           - Email à massamba@polaris-asso.org
           - Contenu : toutes les informations du formulaire
           - Email de confirmation à l'utilisateur (si email fourni)
        
        4. GESTION DES FICHIERS :
           - Upload sécurisé du justificatif
           - Stockage avec nom unique
           - Vérification du type MIME
           - Limitation de taille
        
        Remplacez la fonction simulateFormSubmission() par un vrai appel fetch() vers votre API.
        */
    </script>
</body>
</html>