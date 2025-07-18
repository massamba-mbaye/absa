<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions d'utilisation - Polaris Association</title>
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
            opacity: 0.95;
            font-weight: 400;
            color: #fff;
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

        /* Meta info */
        .meta-info {
            background: var(--light-gray);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin-bottom: var(--spacing-xl);
            border-left: 4px solid var(--primary-color);
        }

        .meta-info p {
            margin: var(--spacing-xs) 0;
            font-size: 0.9rem;
            color: #4a5568;
        }

        .meta-info strong {
            color: var(--text-color);
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

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: var(--spacing-md);
            margin: var(--spacing-lg) 0;
        }

        .service-card {
            background: var(--light-gray);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary-color);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .service-card h4 {
            color: var(--primary-color);
            margin-bottom: var(--spacing-sm);
        }

        /* Contact info */
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

            .services-grid {
                grid-template-columns: 1fr;
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
        a:focus {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: var(--spacing-lg) 0;
        }

        th, td {
            padding: var(--spacing-sm);
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background: var(--light-gray);
            font-weight: 600;
            color: var(--text-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-content">
                <h1>Conditions d'utilisation de nos services</h1>
                <p>Polaris Association - Centre d'écoute anonyme ABSA</p>
            </div>
        </header>

        <main class="content">
            <div class="content-inner">
                <div class="meta-info">
                    <p><strong>Dernière mise à jour :</strong> 17 juillet 2025</p>
                    <p><strong>Version :</strong> 1.0</p>
                    <p><strong>Applicabilité :</strong> République du Sénégal</p>
                </div>

                <h2>Conditions d'utilisation</h2>

                <h3>Article 1 - Acceptation des conditions</h3>
                <p>En utilisant le site web et les services de Polaris Association, notamment l'agent conversationnel ABSA (centre d'écoute anonyme), vous acceptez d'être lié par les présentes conditions d'utilisation dans leur intégralité.</p>
                <p>Si vous n'acceptez pas ces conditions, vous devez cesser immédiatement d'utiliser nos services. L'utilisation continue de nos services vaut acceptation tacite de ces conditions.</p>

                <h3>Article 2 - Présentation de Polaris Association</h3>
                
                <div class="info-box">
                    <h4>Identité de l'association</h4>
                    <table>
                        <tr>
                            <td><strong>Dénomination</strong></td>
                            <td>Polaris Association</td>
                        </tr>
                        <tr>
                            <td><strong>Statut juridique</strong></td>
                            <td>Association de droit sénégalais</td>
                        </tr>
                        <tr>
                            <td><strong>NINEA</strong></td>
                            <td>009698385</td>
                        </tr>
                        <tr>
                            <td><strong>Siège social</strong></td>
                            <td>Ngor Almadie, Rue 109, Dakar, Sénégal</td>
                        </tr>
                        <tr>
                            <td><strong>Secteur d'activité</strong></td>
                            <td>Formation, sensibilisation et soutien aux victimes</td>
                        </tr>
                    </table>
                </div>

                <p><strong>Mission principale :</strong> Polaris Association a pour mission de fournir un centre d'écoute anonyme et en ligne pour recueillir la parole des jeunes victimes de violence et de harcèlement au Sénégal, tout en offrant un accompagnement et une orientation vers des services spécialisés.</p>

                <h3>Article 3 - Description des services</h3>
                
                <div class="services-grid">
                    <div class="service-card">
                        <h4>🤖 ABSA (Agent Conversationnel)</h4>
                        <p>Plateforme d'écoute anonyme accessible 24h/24 pour les victimes de violences</p>
                    </div>
                    <div class="service-card">
                        <h4>💚 Soutien émotionnel</h4>
                        <p>Accompagnement psychologique de première ligne et écoute bienveillante</p>
                    </div>
                    <div class="service-card">
                        <h4>🎯 Orientation spécialisée</h4>
                        <p>Mise en relation avec psychologues, associations et services sociaux</p>
                    </div>
                    <div class="service-card">
                        <h4>⚖️ Information légale</h4>
                        <p>Guidance sur les procédures judiciaires au Sénégal</p>
                    </div>
                    <div class="service-card">
                        <h4>📈 Suivi personnalisé</h4>
                        <p>Accompagnement dans la durée avec votre consentement</p>
                    </div>
                    <div class="service-card">
                        <h4>🚨 Signalement</h4>
                        <p>Transmission aux autorités compétentes en cas de danger imminent</p>
                    </div>
                </div>

                <div class="success-box">
                    <strong>🔒 Principe fondamental :</strong> Tous nos services sont basés sur le principe de l'anonymat et de la confidentialité. Aucune information personnelle n'est exigée pour accéder à l'aide.
                </div>

                <h3>Article 4 - Conditions d'accès aux services</h3>
                
                <h4>4.1 Public cible</h4>
                <p>Nos services sont destinés prioritairement aux :</p>
                <ul>
                    <li>Jeunes sénégalais et sénégalaises</li>
                    <li>Jeunes africains résidant au Sénégal</li>
                    <li>Victimes ou témoins de violences (physiques, psychologiques, sexuelles, en ligne)</li>
                    <li>Personnes en situation de harcèlement ou de discrimination</li>
                </ul>

                <h4>4.2 Modalités d'accès</h4>
                <p>L'accès à nos services se fait via :</p>
                <ul>
                    <li>Site web officiel : absa.polaris-asso.org</li>
                    <li>WhatsApp (numéro dédié pour ABSA)</li>
                    <li>Autres canaux de communication officiels</li>
                </ul>

                <h3>Article 5 - Obligations de l'utilisateur</h3>
                
                <p>Vous vous engagez à utiliser nos services de manière responsable et conforme à la législation sénégalaise.</p>

                <div class="warning-box">
                    <h4>⚠️ Comportements strictement interdits</h4>
                    <ul>
                        <li>Utiliser les services à des fins illégales ou contraires aux bonnes mœurs</li>
                        <li>Transmettre des contenus diffamatoires, injurieux, haineux ou discriminatoires</li>
                        <li>Harceler, menacer ou intimider d'autres utilisateurs ou notre personnel</li>
                        <li>Usurper l'identité d'une autre personne</li>
                        <li>Tenter de compromettre la sécurité de nos systèmes informatiques</li>
                        <li>Utiliser nos services pour faire de la publicité ou du démarchage</li>
                        <li>Perturber délibérément le fonctionnement normal des services</li>
                        <li>Collecter des informations sur d'autres utilisateurs</li>
                    </ul>
                </div>

                <h4>5.1 Véracité des informations</h4>
                <p>Bien que nos services soient anonymes, vous vous engagez à fournir des informations sincères concernant votre situation, afin de recevoir l'aide la plus appropriée.</p>

                <h4>5.2 Respect de l'anonymat d'autrui</h4>
                <p>Vous vous engagez à respecter l'anonymat et la confidentialité des autres utilisateurs et à ne pas tenter d'identifier d'autres personnes utilisant nos services.</p>

                <h3>Article 6 - Obligations de Polaris Association</h3>
                
                <p>Polaris Association s'engage à :</p>
                <ul>
                    <li>Fournir un service d'écoute professionnel et bienveillant</li>
                    <li>Respecter strictement l'anonymat et la confidentialité</li>
                    <li>Orienter vers des services compétents selon les besoins</li>
                    <li>Former régulièrement son personnel aux enjeux de l'écoute</li>
                    <li>Maintenir la sécurité technique de ses plateformes</li>
                </ul>

                <p>Nous nous efforçons de maintenir nos services disponibles 24h/24, mais nous ne pouvons garantir un fonctionnement sans interruption en raison de contraintes techniques, de maintenance ou de force majeure.</p>

                <h3>Article 7 - Propriété intellectuelle</h3>
                <p>Tous les contenus présents sur notre site web et nos plateformes (textes, logos, interface, méthodologies, protocoles) sont protégés par les droits d'auteur et appartiennent à Polaris Association ou à leurs propriétaires respectifs.</p>
                <p>Toute reproduction, diffusion ou utilisation commerciale de ces contenus est interdite sans autorisation écrite préalable, conformément au droit sénégalais sur la propriété intellectuelle.</p>

                <h3>Article 8 - Protection des données personnelles</h3>
                <p>Le traitement de vos données personnelles est régi par notre Politique de confidentialité, conforme à la législation sénégalaise sur la protection des données et aux recommandations de la Commission de Protection des Données Personnelles (CDP).</p>
                <p>Notre architecture technique garantit l'anonymat "by design" : nous collectons et conservons le minimum de données nécessaires à notre mission d'aide.</p>

                <h3>Article 9 - Responsabilité et garanties</h3>
                
                <div class="highlight-box">
                    <h4>🚨 Limites importantes</h4>
                    <p>Polaris Association fournit un service d'écoute et d'orientation. <strong>Nous ne sommes pas un service d'urgence médicale ou policière.</strong></p>
                    <p><strong>En cas de danger imminent, contactez directement :</strong></p>
                    <ul>
                        <li><strong>Police :</strong> 17 ou 800 00 20 20</li>
                        <li><strong>Gendarmerie :</strong> 800 00 20 21</li>
                        <li><strong>Sapeurs-pompiers :</strong> 18</li>
                    </ul>
                </div>

                <h4>9.1 Exclusions de garantie</h4>
                <p>Notre responsabilité est limitée dans le cadre prévu par la législation sénégalaise. Nous ne saurions être tenus responsables :</p>
                <ul>
                    <li>Des dommages indirects ou consécutifs</li>
                    <li>Des interruptions de service dues à des causes techniques</li>
                    <li>Des décisions prises par l'utilisateur suite à nos conseils</li>
                    <li>Des actions ou inactions d'organismes tiers vers lesquels nous orientons</li>
                </ul>

                <h3>Article 10 - Signalement et coopération avec les autorités</h3>
                <p>Conformément à nos obligations légales et déontologiques, nous nous réservons le droit de signaler aux autorités compétentes sénégalaises les situations suivantes :</p>
                <ul>
                    <li>Danger imminent pour la vie ou l'intégrité physique</li>
                    <li>Crimes ou délits graves en cours ou planifiés</li>
                    <li>Violences sur mineurs</li>
                    <li>Situations nécessitant une intervention urgente des forces de l'ordre</li>
                </ul>

                <h3>Article 11 - Modification des conditions</h3>
                <p>Polaris Association se réserve le droit de modifier les présentes conditions d'utilisation à tout moment. Les modifications prendront effet dès leur publication sur cette page.</p>
                <p>En cas de modification substantielle, nous nous efforcerons d'en informer les utilisateurs via nos canaux de communication habituels.</p>

                <h3>Article 12 - Droit applicable et juridiction</h3>
                <p>Les présentes conditions d'utilisation sont régies par le droit sénégalais. En cas de litige, et après tentative de résolution amiable, les tribunaux sénégalais seront seuls compétents.</p>

                <h3>Article 13 - Dispositions diverses</h3>
                
                <h4>13.1 Nullité partielle</h4>
                <p>Si une clause des présentes conditions est jugée nulle ou inapplicable, les autres clauses demeurent en vigueur.</p>

                <h4>13.2 Langue</h4>
                <p>Les présentes conditions sont rédigées en français. En cas de traduction, seule la version française fait foi.</p>

                <div class="contact-section">
                    <h4>📞 Informations de contact</h4>
                    <p><strong>Polaris Association</strong><br>
                    Ngor Almadie, Rue 109<br>
                    Dakar, Sénégal</p>
                    
                    <p><strong>Email général :</strong> hello@polaris-asso.org<br>
                    <strong>Téléphone :</strong> +221 77 410 25 26</p>
                    
                    <p><strong>Directeur délégué :</strong> Ange Fiacre NOUGBODOHOUE<br>
                    <strong>Email :</strong> ange@polaris-asso.org<br>
                    <strong>Téléphone :</strong> +221 78 109 90 15</p>
                </div>
            </div>
        </main>

        <footer class="footer">
            <p>&copy; 2025 Polaris Association. Tous droits réservés.</p>
            <p>Association de droit sénégalais - NINEA : 009698385</p>
            <p>Conditions conformes à la législation sénégalaise</p>
        </footer>
    </div>

    <button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Retour en haut">
        ↑
    </button>
</body>
</html>