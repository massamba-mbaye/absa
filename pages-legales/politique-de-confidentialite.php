<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de confidentialité - Polaris Association</title>
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

        .cdp-status {
            background: linear-gradient(135deg, #ebf8ff 0%, #bee3f8 100%);
            border: 1px solid #90cdf4;
            border-left: 4px solid var(--info-color);
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            margin-bottom: var(--spacing-xl);
        }

        .cdp-status p {
            margin: var(--spacing-xs) 0;
            color: #2d3748;
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

        /* Data table */
        .data-table {
            background: var(--light-gray);
            border-radius: var(--border-radius);
            overflow: hidden;
            margin: var(--spacing-lg) 0;
            border: 1px solid var(--border-color);
            box-shadow: var(--shadow-sm);
        }

        .data-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            background: var(--primary-color);
            color: var(--white);
            padding: var(--spacing-md);
            text-align: left;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .data-table td {
            padding: var(--spacing-md);
            border-bottom: 1px solid var(--border-color);
            vertical-align: top;
            background: var(--white);
        }

        .data-table tr:last-child td {
            border-bottom: none;
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

        /* Security box */
        .security-box {
            background: linear-gradient(135deg, #f0fff4 0%, #c6f6d5 100%);
            border: 1px solid #9ae6b4;
            border-left: 4px solid var(--success-color);
            padding: var(--spacing-lg);
            border-radius: var(--border-radius);
            margin: var(--spacing-lg) 0;
        }

        .security-box h4 {
            color: var(--success-color);
            margin-bottom: var(--spacing-md);
            font-size: 1.2rem;
        }

        /* Contact section */
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

            .rights-grid {
                grid-template-columns: 1fr;
            }

            .back-to-top {
                bottom: 1rem;
                right: 1rem;
                width: 48px;
                height: 48px;
                font-size: 1rem;
            }

            .data-table {
                font-size: 0.9rem;
            }

            .data-table th,
            .data-table td {
                padding: var(--spacing-sm);
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
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-content">
                <h1>Politique de confidentialité</h1>
                <p>Polaris Association - Protection de vos données personnelles</p>
            </div>
        </header>

        <main class="content">
            <div class="content-inner">
                <div class="meta-info">
                    <p><strong>Dernière mise à jour :</strong> 17 juillet 2025</p>
                    <p><strong>Version :</strong> 1.0</p>
                    <p><strong>Législation applicable :</strong> République du Sénégal</p>
                </div>

                <div class="cdp-status">
                    <p><strong>📋 Statut de conformité CDP :</strong> Déclaration en cours auprès de la Commission de Protection des Données Personnelles du Sénégal</p>
                    <p><strong>📧 Contact CDP :</strong> contactcdp@cdp.sn</p>
                </div>

                <h2>Politique de confidentialité</h2>

                <h3>Article 1 - Responsable du traitement des données</h3>
                <div class="data-table">
                    <table>
                        <tr>
                            <th>Information</th>
                            <th>Détails</th>
                        </tr>
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
                            <td><strong>Email</strong></td>
                            <td>hello@polaris-asso.org</td>
                        </tr>
                        <tr>
                            <td><strong>Téléphone</strong></td>
                            <td>+221 77 410 25 26</td>
                        </tr>
                        <tr>
                            <td><strong>Point focal CDP</strong></td>
                            <td>Ange Fiacre NOUGBODOHOUE<br>ange@polaris-asso.org<br>+221 78 109 90 15</td>
                        </tr>
                    </table>
                </div>

                <h3>Article 2 - Finalités du traitement des données</h3>
                <p>Conformément à notre déclaration auprès de la CDP, Polaris Association traite vos données personnelles exclusivement dans le cadre de sa mission d'intérêt général :</p>

                <div class="data-table">
                    <table>
                        <tr>
                            <th>Finalité principale</th>
                            <th>Description détaillée</th>
                        </tr>
                        <tr>
                            <td><strong>Centre d'écoute anonyme</strong></td>
                            <td>Mise en place d'un service de soutien pour recueillir la parole des jeunes victimes de violence et de harcèlement au Sénégal</td>
                        </tr>
                        <tr>
                            <td><strong>Soutien émotionnel</strong></td>
                            <td>Offrir un accompagnement psychologique de première ligne et une écoute bienveillante</td>
                        </tr>
                        <tr>
                            <td><strong>Orientation spécialisée</strong></td>
                            <td>Orienter vers des psychologues, associations, services sociaux et autorités compétentes</td>
                        </tr>
                        <tr>
                            <td><strong>Suivi personnalisé</strong></td>
                            <td>Assurer le suivi des victimes et évaluer leur satisfaction (avec consentement explicite)</td>
                        </tr>
                        <tr>
                            <td><strong>Prévention</strong></td>
                            <td>Analyser les tendances pour améliorer la prévention des violences (données anonymisées)</td>
                        </tr>
                    </table>
                </div>

                <h3>Article 3 - Catégories de personnes concernées</h3>
                <p>Les données personnelles traitées concernent :</p>
                <ul>
                    <li><strong>Population cible :</strong> Jeunes sénégalais et sénégalaises ou africains vivant au Sénégal</li>
                    <li><strong>Situation :</strong> Victimes ou témoins de violences (physiques, psychologiques, sexuelles, en ligne)</li>
                    <li><strong>Contexte :</strong> Personnes en situation de harcèlement, discrimination ou violence basée sur le genre</li>
                    <li><strong>Accompagnants :</strong> Proches ou aidants de victimes (avec leur consentement)</li>
                </ul>

                <h3>Article 4 - Types de données collectées</h3>
                <p>Dans le respect du principe de minimisation des données, nous collectons uniquement les informations strictement nécessaires à notre mission :</p>

                <h4>4.1 Données directement fournies par l'utilisateur</h4>
                <div class="data-table">
                    <table>
                        <tr>
                            <th>Catégorie</th>
                            <th>Données collectées</th>
                            <th>Caractère obligatoire</th>
                        </tr>
                        <tr>
                            <td><strong>Identification</strong></td>
                            <td>Numéros de téléphone (WhatsApp), pseudonymes choisis</td>
                            <td>Facultatif - uniquement si fourni volontairement pour un suivi</td>
                        </tr>
                        <tr>
                            <td><strong>Communication</strong></td>
                            <td>Messages échangés avec l'agent conversationnel ABSA</td>
                            <td>Nécessaire au service</td>
                        </tr>
                        <tr>
                            <td><strong>Documents</strong></td>
                            <td>Captures d'écran, photos, vidéos ou autres preuves envoyées</td>
                            <td>Facultatif - uniquement si fourni volontairement</td>
                        </tr>
                        <tr>
                            <td><strong>Suivi</strong></td>
                            <td>Informations sur rendez-vous avec psychologues, évaluations de satisfaction</td>
                            <td>Facultatif - uniquement avec consentement explicite</td>
                        </tr>
                    </table>
                </div>

                <h4>4.2 Données techniques (minimales)</h4>
                <p>Par design, notre architecture collecte le minimum de données techniques :</p>
                <ul>
                    <li><strong>Horodatage :</strong> Date et heure des échanges (pour la continuité du dialogue)</li>
                    <li><strong>Identifiant de session :</strong> Code anonyme temporaire pour la conversation</li>
                    <li><strong>Plateforme :</strong> Canal utilisé (site web, WhatsApp) - pour la qualité du service</li>
                </ul>

                <div class="success-box">
                    <strong>🔒 Principe d'anonymat by design :</strong> Notre architecture technique garantit que l'anonymat est préservé dès la conception. Nous ne collectons aucune donnée d'identification personnelle sans consentement explicite.
                </div>

                <h3>Article 5 - Base légale du traitement</h3>
                <p>Le traitement de vos données personnelles repose sur les bases légales suivantes, conformément à la législation sénégalaise :</p>

                <div class="rights-grid">
                    <div class="right-card">
                        <h4>🤝 Consentement</h4>
                        <p>Votre consentement libre, éclairé et spécifique pour les données fournies volontairement (numéro de téléphone, documents)</p>
                    </div>
                    <div class="right-card">
                        <h4>🎯 Mission d'intérêt public</h4>
                        <p>Protection et accompagnement des victimes de violences - mission d'intérêt général de l'association</p>
                    </div>
                    <div class="right-card">
                        <h4>⚖️ Obligation légale</h4>
                        <p>Signalement aux autorités en cas de danger imminent (Code pénal sénégalais)</p>
                    </div>
                    <div class="right-card">
                        <h4>🛡️ Intérêts vitaux</h4>
                        <p>Protection de la vie et de l'intégrité physique de la personne concernée ou d'autrui</p>
                    </div>
                </div>

                <h3>Article 6 - Conservation et stockage des données</h3>
                <h4>6.1 Durées de conservation</h4>
                <div class="data-table">
                    <table>
                        <tr>
                            <th>Type de données</th>
                            <th>Durée de conservation</th>
                            <th>Justification</th>
                        </tr>
                        <tr>
                            <td><strong>Messages ABSA (sans suivi)</strong></td>
                            <td>30 jours maximum</td>
                            <td>Assurer la continuité du dialogue puis suppression automatique</td>
                        </tr>
                        <tr>
                            <td><strong>Données de suivi (avec consentement)</strong></td>
                            <td>2 ans maximum</td>
                            <td>Accompagnement dans la durée et évaluation d'impact</td>
                        </tr>
                        <tr>
                            <td><strong>Documents sensibles (preuves)</strong></td>
                            <td>Jusqu'à résolution + 1 an</td>
                            <td>Transmission aux autorités compétentes si nécessaire</td>
                        </tr>
                        <tr>
                            <td><strong>Données anonymisées (statistiques)</strong></td>
                            <td>5 ans maximum</td>
                            <td>Recherche et amélioration de la prévention</td>
                        </tr>
                    </table>
                </div>

                <h4>6.2 Lieux de stockage et hébergement</h4>
                <div class="security-box">
                    <h4>🌍 Localisation des données</h4>
                    <ul>
                        <li><strong>Hébergement principal :</strong> OVH (France) - Serveurs sécurisés avec chiffrement</li>
                        <li><strong>Données sensibles :</strong> Serveurs locaux sécurisés au Sénégal (en cours de déploiement)</li>
                        <li><strong>Sauvegardes :</strong> Chiffrées et stockées dans l'Union Européenne</li>
                        <li><strong>Conformité :</strong> Tous les hébergeurs respectent les standards internationaux de sécurité</li>
                    </ul>
                </div>

                <h3>Article 7 - Transferts vers des pays tiers</h3>
                <p>Certains de nos outils techniques peuvent impliquer des transferts de données vers des pays tiers :</p>

                <div class="data-table">
                    <table>
                        <tr>
                            <th>Service</th>
                            <th>Pays de destination</th>
                            <th>Données transférées</th>
                            <th>Garanties de protection</th>
                        </tr>
                        <tr>
                            <td><strong>OVH (hébergement web)</strong></td>
                            <td>France (UE)</td>
                            <td>Messages, données techniques</td>
                            <td>RGPD, certification ISO 27001</td>
                        </tr>
                        <tr>
                            <td><strong>Meta/WhatsApp</strong></td>
                            <td>États-Unis</td>
                            <td>Numéros de téléphone, messages</td>
                            <td>Clauses contractuelles types, chiffrement de bout en bout</td>
                        </tr>
                        <tr>
                            <td><strong>Twilio (passerelle)</strong></td>
                            <td>États-Unis</td>
                            <td>Messages transitoires</td>
                            <td>Certification SOC 2, clauses contractuelles</td>
                        </tr>
                        <tr>
                            <td><strong>Mistral AI</strong></td>
                            <td>France (UE)</td>
                            <td>Messages anonymisés</td>
                            <td>RGPD, données anonymisées à la source</td>
                        </tr>
                    </table>
                </div>

                <h3>Article 8 - Partage et communication des données</h3>
                <p><strong>Principe général :</strong> Nous ne vendons jamais vos données personnelles. Le partage est strictement limité aux cas suivants :</p>

                <h4>8.1 Avec votre consentement</h4>
                <ul>
                    <li>Transmission de votre dossier à un psychologue partenaire (avec accord explicite)</li>
                    <li>Mise en relation avec une association spécialisée (sur demande)</li>
                    <li>Partage avec un proche aidant (si vous le souhaitez)</li>
                </ul>

                <h4>8.2 Obligations légales et signalement</h4>
                <p>Conformément au droit sénégalais, nous sommes tenus de signaler aux autorités compétentes :</p>
                <ul>
                    <li><strong>Police Nationale :</strong> Crimes et délits, violences physiques graves</li>
                    <li><strong>Gendarmerie Nationale :</strong> Violences en milieu rural, cybercriminalité</li>
                    <li><strong>ARTP :</strong> Violations des règles de télécommunication, cyberviolences</li>
                    <li><strong>CENTIF :</strong> Cybercriminalité financière, chantage</li>
                    <li><strong>Services sociaux :</strong> Violences sur mineurs, situations de danger</li>
                </ul>

                <div class="warning-box">
                    <h4>⚠️ Limites de la confidentialité</h4>
                    <p>Bien que nous respections strictement l'anonymat, nous avons l'obligation légale de signaler aux autorités les situations de danger imminent ou les crimes graves. Nous vous informons toujours avant tout signalement, sauf en cas de danger immédiat.</p>
                </div>

                <h3>Article 9 - Vos droits selon la législation sénégalaise</h3>
                <p>Conformément à la loi sénégalaise sur la protection des données personnelles, vous disposez des droits suivants :</p>

                <div class="rights-grid">
                    <div class="right-card">
                        <h4>👁️ Droit d'accès</h4>
                        <p>Connaître les données que nous détenons sur vous, leur utilisation et leur origine</p>
                    </div>
                    <div class="right-card">
                        <h4>✏️ Droit de rectification</h4>
                        <p>Corriger des données inexactes ou incomplètes vous concernant</p>
                    </div>
                    <div class="right-card">
                        <h4>🗑️ Droit d'effacement</h4>
                        <p>Demander la suppression de vos données (sauf obligations légales)</p>
                    </div>
                    <div class="right-card">
                        <h4>⛔ Droit d'opposition</h4>
                        <p>Vous opposer au traitement de vos données pour des motifs légitimes</p>
                    </div>
                    <div class="right-card">
                        <h4>🚫 Retrait du consentement</h4>
                        <p>Retirer votre consentement à tout moment (sans rétroactivité)</p>
                    </div>
                    <div class="right-card">
                        <h4>📦 Droit à la portabilité</h4>
                        <p>Récupérer vos données dans un format structuré et lisible</p>
                    </div>
                </div>

                <h4>Modalités d'exercice de vos droits</h4>
                <p>Pour exercer vos droits, vous pouvez :</p>
                <ul>
                    <li>Utiliser notre formulaire de demande en ligne</li>
                    <li>Envoyer un email à notre délégué à la protection des données</li>
                    <li>Nous adresser un courrier postal avec pièce d'identité</li>
                </ul>
                <p><strong>Délai de réponse :</strong> 30 jours maximum conformément à la réglementation sénégalaise</p>

                <h3>Article 10 - Sécurité des données</h3>
                <div class="security-box">
                    <h4>🔐 Mesures de sécurité techniques</h4>
                    <ul>
                        <li><strong>Chiffrement :</strong> Données chiffrées en transit (HTTPS/TLS) et au repos (AES-256)</li>
                        <li><strong>Accès restreint :</strong> Authentification forte, principe du moindre privilège</li>
                        <li><strong>Surveillance :</strong> Monitoring 24h/24 des accès et tentatives d'intrusion</li>
                        <li><strong>Sauvegardes :</strong> Sauvegardes chiffrées quotidiennes avec tests de restauration</li>
                        <li><strong>Anonymisation :</strong> Hachage irréversible des identifiants personnels</li>
                    </ul>

                    <h4>🛡️ Mesures organisationnelles</h4>
                    <ul>
                        <li><strong>Formation :</strong> Personnel formé à la protection des données et à la confidentialité</li>
                        <li><strong>Audit :</strong> Audit de sécurité annuel par un prestataire certifié</li>
                        <li><strong>Incident :</strong> Procédure de gestion des violations de données</li>
                        <li><strong>Documentation :</strong> Registre des traitements et documentation de conformité</li>
                    </ul>
                </div>

                <h3>Article 11 - Cookies et traceurs</h3>
                <p>Conformément à notre approche de minimisation :</p>
                <ul>
                    <li><strong>Pas de cookies publicitaires :</strong> Nous n'utilisons aucun cookie de tracking ou publicitaire</li>
                    <li><strong>Cookies techniques uniquement :</strong> Cookies strictement nécessaires au fonctionnement (session, sécurité)</li>
                    <li><strong>Pas de profilage :</strong> Aucun cookie d'analyse comportementale ou de création de profils</li>
                    <li><strong>Durée limitée :</strong> Les cookies techniques sont supprimés à la fin de session</li>
                </ul>

                <h3>Article 12 - Notification des violations de données</h3>
                <p>En cas de violation de données personnelles susceptible d'engendrer un risque pour vos droits et libertés :</p>
                <ul>
                    <li><strong>Notification CDP :</strong> Dans les 72 heures à la Commission de Protection des Données</li>
                    <li><strong>Information utilisateurs :</strong> Communication immédiate si risque élevé</li>
                    <li><strong>Mesures correctives :</strong> Actions immédiates pour limiter l'impact</li>
                    <li><strong>Transparence :</strong> Publication d'un rapport post-incident</li>
                </ul>

                <h3>Article 13 - Évolution de la politique</h3>
                <p>Cette politique de confidentialité peut être modifiée pour refléter :</p>
                <ul>
                    <li>Les évolutions de la législation sénégalaise</li>
                    <li>Les recommandations de la CDP</li>
                    <li>L'amélioration de nos services et mesures de protection</li>
                    <li>L'adoption de nouvelles technologies</li>
                </ul>
                <p><strong>Information :</strong> Toute modification substantielle vous sera communiquée avec un préavis de 30 jours.</p>

                <h3>Article 14 - Réclamations et recours</h3>
                <p>Pour toute réclamation concernant le traitement de vos données personnelles :</p>

                <div class="contact-section">
                    <h4>🏛️ Autorité de contrôle</h4>
                    <p><strong>Commission de Protection des Données Personnelles (CDP)</strong><br>
                    Email : contactcdp@cdp.sn<br>
                    Site web : www.cdp.sn<br>
                    Rôle : Autorité de contrôle pour la protection des données au Sénégal</p>

                    <h4>👥 Contact Polaris Association</h4>
                    <p><strong>Délégué à la Protection des Données :</strong><br>
                    Ange Fiacre NOUGBODOHOUE<br>
                    Email : ange@polaris-asso.org<br>
                    Téléphone : +221 78 109 90 15</p>
                    
                    <p><strong>Adresse postale :</strong><br>
                    Polaris Association<br>
                    Ngor Almadie, Rue 109<br>
                    Dakar, Sénégal</p>
                </div>

                <div class="success-box">
                    <strong>🤝 Notre engagement :</strong> Polaris Association s'engage à traiter vos données avec le plus grand respect, dans la transparence totale et conformément aux valeurs de bienveillance qui guident notre mission d'aide aux victimes.
                </div>
            </div>
        </main>

        <footer class="footer">
            <p>&copy; 2025 Polaris Association. Tous droits réservés.</p>
            <p>Politique conforme à la législation sénégalaise sur la protection des données personnelles</p>
            <p>Déclaration CDP en cours - Contact : contactcdp@cdp.sn</p>
        </footer>
    </div>

    <button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Retour en haut">
        ↑
    </button>
</body>
</html>