<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Excellence - Especialista em Estética Dental | Transforme seu Sorriso</title>
    <meta name="description" content="Clínica especializada em estética dental. Clareamento, facetas, lentes de contato e harmonização facial. Agende sua consulta e transforme seu sorriso.">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #2C5282;
            --light-blue: #E8F4FD;
            --mint-green: #F0FAF7;
            --soft-gray: #64748B;
            --dark-gray: #2D3748;
            --white: #FFFFFF;
            --accent-gold: #D69E2E;
            --gradient-main: linear-gradient(135deg, #E8F4FD 0%, #F0FAF7 100%);
            --gradient-hero: linear-gradient(135deg, #E8F4FD 0%, #F0FAF7 50%, #E8F4FD 100%);
            --shadow-soft: 0 4px 20px rgba(44, 82, 130, 0.08);
            --shadow-hover: 0 8px 30px rgba(44, 82, 130, 0.15);
            --shadow-strong: 0 10px 40px rgba(44, 82, 130, 0.2);
            --transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--dark-gray);
            overflow-x: hidden;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(44, 82, 130, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary-blue);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo::before {
            content: "✨";
            font-size: 2rem;
            animation: sparkle 3s ease-in-out infinite;
        }

        @keyframes sparkle {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 1; }
            50% { transform: scale(1.2) rotate(180deg); opacity: 0.8; }
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--soft-gray);
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary-blue);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-blue);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .cta-button {
            background: var(--primary-blue);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
            background: #1A365D;
        }

        /* Hero Section */
        .hero {
            background: var(--gradient-hero);
            padding: 120px 5% 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(44, 82, 130, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(240, 250, 247, 0.9) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 10s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(5deg); }
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary-blue);
            line-height: 1.2;
        }

        .hero .subtitle {
            font-size: 1.4rem;
            color: var(--accent-gold);
            font-weight: 600;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--soft-gray);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        .btn-primary {
            background: var(--primary-blue);
            color: white;
            padding: 18px 35px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary-blue);
            padding: 18px 35px;
            border: 2px solid var(--primary-blue);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
            background: #1A365D;
        }

        .btn-secondary:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
        }

        .hero-features {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .hero-feature {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--soft-gray);
            font-weight: 500;
        }

        .hero-feature::before {
            content: "✓";
            color: var(--accent-gold);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Services Section */
        .services {
            padding: 100px 5%;
            background: white;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 80px;
        }

        .section-header h2 {
            font-size: 2.8rem;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .section-header p {
            color: var(--soft-gray);
            font-size: 1.2rem;
            line-height: 1.7;
        }

        .services-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Featured Service - Large Banner */
        .featured-service {
            background: var(--gradient-main);
            border-radius: 30px;
            padding: 4rem;
            margin-bottom: 4rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            box-shadow: var(--shadow-soft);
            transition: all 0.4s ease;
        }

        .featured-service:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .featured-content h3 {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .featured-content p {
            font-size: 1.2rem;
            color: var(--soft-gray);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .featured-highlights {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .highlight-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--soft-gray);
            font-weight: 500;
        }

        .highlight-item::before {
            content: "✨";
            font-size: 1.2rem;
        }

        .featured-visual {
            text-align: center;
            font-size: 8rem;
            position: relative;
        }

        .featured-visual::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(44, 82, 130, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse-bg 3s ease-in-out infinite;
        }

        @keyframes pulse-bg {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.8; }
            50% { transform: translate(-50%, -50%) scale(1.1); opacity: 0.4; }
        }

        .featured-price {
            font-size: 1.8rem;
            color: var(--accent-gold);
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        /* Services Grid - Mixed Layout */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card {
            background: white;
            border-radius: 25px;
            padding: 2.5rem;
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-gold));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: block;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .service-card h3 {
            font-size: 1.5rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .service-card p {
            color: var(--soft-gray);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .service-price {
            color: var(--accent-gold);
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        .service-btn {
            background: var(--mint-green);
            color: var(--primary-blue);
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .service-btn:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }

        /* Text-based Services */
        .services-text-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .service-text-block {
            background: var(--mint-green);
            padding: 3rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .service-text-block:hover {
            transform: translateX(10px);
            box-shadow: var(--shadow-soft);
        }

        .service-text-block h3 {
            font-size: 1.8rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .service-text-block .icon {
            font-size: 2.5rem;
        }

        .service-text-block p {
            color: var(--soft-gray);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .service-benefits {
            list-style: none;
            margin-bottom: 1.5rem;
        }

        .service-benefits li {
            color: var(--soft-gray);
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-benefits li::before {
            content: "•";
            color: var(--accent-gold);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Call to Action Section */
        .services-cta {
            background: var(--primary-blue);
            color: white;
            padding: 3rem;
            border-radius: 25px;
            text-align: center;
            margin-top: 3rem;
        }

        .services-cta h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .services-cta p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-primary {
            background: var(--accent-gold);
            color: var(--primary-blue);
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .cta-secondary {
            background: transparent;
            color: white;
            padding: 15px 30px;
            border: 2px solid white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .cta-primary:hover {
            background: white;
            color: var(--primary-blue);
            transform: translateY(-2px);
        }

        .cta-secondary:hover {
            background: white;
            color: var(--primary-blue);
            transform: translateY(-2px);
        }

        /* Before/After Gallery */
        .gallery {
            padding: 100px 5%;
            background: var(--light-blue);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .gallery-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(45deg, #E8F4FD, #F0FAF7);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }

        .gallery-image::before {
            content: 'ANTES';
            position: absolute;
            top: 10px;
            left: 15px;
            background: rgba(44, 82, 130, 0.9);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .gallery-image::after {
            content: 'DEPOIS';
            position: absolute;
            top: 10px;
            right: 15px;
            background: rgba(214, 158, 46, 0.9);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .gallery-content {
            padding: 1.5rem;
            text-align: center;
        }

        .gallery-title {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .gallery-description {
            color: var(--soft-gray);
            font-size: 0.9rem;
        }

        /* About Section */
        .about {
            padding: 100px 5%;
            background: white;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-content h2 {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .about-content p {
            color: var(--soft-gray);
            margin-bottom: 1.5rem;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .credentials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .credential {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--soft-gray);
        }

        .credential::before {
            content: "🏆";
            font-size: 1.2rem;
        }

        .about-image {
            width: 100%;
            height: 500px;
            background: var(--gradient-main);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            position: relative;
            overflow: hidden;
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(44, 82, 130, 0.1) 100%);
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 5%;
            background: var(--mint-green);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: white;
            padding: 2.5rem;
            border-radius: 25px;
            box-shadow: var(--shadow-soft);
            transition: transform 0.3s ease;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 4rem;
            color: var(--accent-gold);
            font-family: serif;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 2rem;
            color: var(--soft-gray);
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .author-info h4 {
            color: var(--primary-blue);
            margin-bottom: 0.3rem;
            font-weight: 600;
        }

        .author-info p {
            color: var(--soft-gray);
            font-size: 0.9rem;
        }

        .stars {
            color: var(--accent-gold);
            margin-top: 0.5rem;
            font-size: 1.2rem;
        }

        /* Contact Section */
        .contact {
            padding: 100px 5%;
            background: white;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-form {
            background: var(--light-blue);
            padding: 3rem;
            border-radius: 30px;
            box-shadow: var(--shadow-soft);
        }

        .contact-form h3 {
            color: var(--primary-blue);
            margin-bottom: 2rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1.8rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            color: var(--primary-blue);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 18px 20px;
            border: 1px solid rgba(44, 82, 130, 0.15);
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            color: var(--dark-gray);
            font-family: inherit;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--soft-gray);
            opacity: 0.7;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(44, 82, 130, 0.1);
            transform: translateY(-2px);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-submit {
            background: var(--primary-blue);
            color: white;
            padding: 18px 35px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
            box-shadow: var(--shadow-soft);
        }

        .form-submit:hover {
            background: #1A365D;
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .contact-info h3 {
            color: var(--primary-blue);
            margin-bottom: 2rem;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 1.2rem;
            margin-bottom: 2.5rem;
            padding: 2rem;
            background: var(--mint-green);
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 1px solid rgba(44, 82, 130, 0.05);
        }

        .info-item:hover {
            transform: translateX(8px);
            box-shadow: var(--shadow-soft);
            border-color: rgba(44, 82, 130, 0.1);
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-blue);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .info-text h4 {
            color: var(--primary-blue);
            margin-bottom: 0.8rem;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .info-text p {
            color: var(--soft-gray);
            line-height: 1.6;
            margin-bottom: 0.5rem;
        }

        .info-highlight {
            color: var(--accent-gold);
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background: #1A202C;
            color: white;
            padding: 60px 5% 30px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
        }

        .footer-section h3 {
            color: var(--light-blue);
            margin-bottom: 1.5rem;
            font-size: 1.4rem;
        }

        .footer-section p,
        .footer-section a {
            color: #A0AEC0;
            text-decoration: none;
            line-height: 1.8;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--light-blue);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
        }

        .social-link.instagram {
            background: linear-gradient(45deg, #E4405F, #C13584, #833AB4);
        }

        .social-link.facebook {
            background: #1877F2;
        }

        .social-link.tiktok {
            background: #000000;
        }

        .social-link.whatsapp {
            background: #25D366;
        }

        .social-link.youtube {
            background: #FF0000;
        }

        .social-link:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: var(--shadow-hover);
        }

        .social-link.instagram:hover {
            background: linear-gradient(45deg, #C13584, #833AB4, #5B2C87);
        }

        .social-link.facebook:hover {
            background: #166FE5;
        }

        .social-link.tiktok:hover {
            background: #333333;
        }

        .social-link.whatsapp:hover {
            background: #1FAA59;
        }

        .social-link.youtube:hover {
            background: #E60000;
        }

        .footer-bottom {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #2D3748;
            text-align: center;
            color: #A0AEC0;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 15px 20px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            box-shadow: var(--shadow-strong);
            z-index: 1000;
            animation: pulse-whatsapp 2s infinite;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .whatsapp-float:hover {
            background: #1FAA59;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 50px rgba(37, 211, 102, 0.4);
        }

        .whatsapp-icon {
            font-size: 1.3rem;
        }

        @keyframes pulse-whatsapp {
            0% { 
                transform: scale(1); 
                box-shadow: var(--shadow-strong);
            }
            50% { 
                transform: scale(1.05); 
                box-shadow: 0 15px 50px rgba(37, 211, 102, 0.3);
            }
            100% { 
                transform: scale(1); 
                box-shadow: var(--shadow-strong);
            }
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger {
            width: 25px;
            height: 3px;
            background: var(--primary-blue);
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: flex;
            }

            .hero {
                padding: 100px 5% 60px;
                min-height: 90vh;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }

            .hero-features {
                flex-direction: column;
                gap: 1rem;
            }

            /* Services Responsive */
            .featured-service {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 2.5rem;
            }

            .featured-visual {
                font-size: 6rem;
                margin-top: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .services-text-section {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .service-text-block {
                padding: 2rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-primary,
            .cta-secondary {
                width: 100%;
                max-width: 280px;
                text-align: center;
            }

            .about-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .section-header h2 {
                font-size: 2.2rem;
            }

            .about-content h2 {
                font-size: 2rem;
            }

            .featured-content h3 {
                font-size: 2rem;
            }

            .faq-question {
                font-size: 1rem;
                padding: 1.2rem;
            }

            .faq-answer.active {
                padding: 0 1.2rem 1.2rem;
            }

            .whatsapp-float {
                bottom: 20px;
                right: 20px;
                padding: 12px 16px;
                font-size: 0.9rem;
            }

            .whatsapp-icon {
                font-size: 1.1rem;
            }
        }

        /* FAQ Section */
        .faq {
            background: var(--light-blue);
            padding: 100px 5%;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--white);
            margin-bottom: 1rem;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
        }

        .faq-question {
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            border: none;
            width: 100%;
            text-align: left;
            background: none;
            font-size: 1.1rem;
            color: var(--primary-blue);
            font-weight: 600;
        }

        .faq-question:hover {
            background: var(--light-blue);
        }

        .faq-icon {
            color: var(--accent-gold);
            font-size: 1.5rem;
            font-weight: bold;
            transition: all 0.3s ease;
            line-height: 1;
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
            color: var(--primary-blue);
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .faq-answer.active {
            padding: 0 1.5rem 1.5rem;
            max-height: 300px;
        }

        .faq-answer p {
            color: var(--soft-gray);
            line-height: 1.7;
            font-size: 1rem;
        }

        /* Loading Animation */
        .loading {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .loading.loaded {
            opacity: 1;
            transform: translateY(0);
        }

        /* Scroll animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="#" class="logo">Dr. Excellence</a>
            <ul class="nav-links">
                <li><a href="#home" class="active">Início</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <a href="#contato" class="cta-button">
                <span>📅</span> Agendar Consulta
            </a>
            <div class="mobile-menu">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="subtitle">Especialista em Estética Dental</div>
            <h1>Transforme seu Sorriso</h1>
            <p>Desperte sua melhor versão com tratamentos estéticos de excelência. Tecnologia avançada, cuidado humanizado e resultados que superam expectativas.</p>
            <div class="hero-buttons">
                <a href="#contato" class="btn-primary">
                    <span>✨</span> Agendar Avaliação Gratuita
                </a>
                <a href="#servicos" class="btn-secondary">Conhecer Tratamentos</a>
            </div>
            <div class="hero-features">
                <div class="hero-feature">15 anos de experiência</div>
                <div class="hero-feature">Tecnologia de ponta</div>
                <div class="hero-feature">Resultados garantidos</div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicos" class="services">
        <div class="section-header">
            <h2>Nossos Tratamentos</h2>
            <p>Oferecemos uma gama completa de procedimentos estéticos para transformar seu sorriso com segurança e excelência técnica.</p>
        </div>

        <div class="services-container">
            <!-- Featured Service - Banner Principal -->
            <div class="featured-service loading">
                <div class="featured-content">
                    <h3>Facetas de Porcelana</h3>
                    <p>Nossa especialidade premium. Lâminas ultra-finas de cerâmica que transformam completamente seu sorriso, corrigindo formato, cor e alinhamento dos dentes com resultado natural e duradouro.</p>
                    
                    <div class="featured-highlights">
                        <div class="highlight-item">Cerâmica de alta qualidade importada</div>
                        <div class="highlight-item">Moldagem digital 3D para precisão máxima</div>
                        <div class="highlight-item">Resultado em 2 sessões</div>
                        <div class="highlight-item">Garantia de 10 anos</div>
                    </div>
                    
                    <div class="featured-price">A partir de R$ 1.200 por dente</div>
                    <a href="#contato" class="btn-primary">
                        <span>💎</span> Agendar Avaliação
                    </a>
                </div>
                <div class="featured-visual">💎</div>
            </div>

            <!-- Services Grid - Cards Tradicionais -->
            <div class="services-grid">
                <div class="service-card loading">
                    <div class="service-icon">✨</div>
                    <h3>Clareamento Dental</h3>
                    <p>Técnicas avançadas para clarear seus dentes de forma segura, devolvendo o branco natural do seu sorriso.</p>
                    <div class="service-price">A partir de R$ 800</div>
                    <a href="#contato" class="service-btn">Saiba Mais</a>
                </div>

                <div class="service-card loading">
                    <div class="service-icon">🦷</div>
                    <h3>Lentes de Contato</h3>
                    <p>Lâminas ultra-finas de cerâmica que proporcionam um sorriso perfeito sem desgaste significativo dos dentes.</p>
                    <div class="service-price">A partir de R$ 1.500</div>
                    <a href="#contato" class="service-btn">Saiba Mais</a>
                </div>

                <div class="service-card loading">
                    <div class="service-icon">🔧</div>
                    <h3>Design de Sorriso</h3>
                    <p>Planejamento digital personalizado do seu novo sorriso, permitindo visualizar o resultado antes do tratamento.</p>
                    <div class="service-price">A partir de R$ 300</div>
                    <a href="#contato" class="service-btn">Saiba Mais</a>
                </div>
            </div>

            <!-- Text-based Services -->
            <div class="services-text-section">
                <div class="service-text-block loading">
                    <h3>
                        <span class="icon">👄</span>
                        Harmonização Facial
                    </h3>
                    <p>Procedimentos que harmonizam o sorriso com o rosto, criando equilíbrio e naturalidade. Nossa abordagem integrada combina técnicas odontológicas e estéticas para resultados excepcionais.</p>
                    
                    <ul class="service-benefits">
                        <li>Preenchimento labial com ácido hialurônico</li>
                        <li>Aplicação de toxina botulínica</li>
                        <li>Bioestimuladores de colágeno</li>
                        <li>Fios de sustentação facial</li>
                    </ul>
                    
                    <div class="service-price">A partir de R$ 600</div>
                </div>

                <div class="service-text-block loading">
                    <h3>
                        <span class="icon">💉</span>
                        Gengivoplastia
                    </h3>
                    <p>Remodelagem precisa da gengiva para criar o contorno perfeito e expor a proporção ideal dos dentes. Técnica minimamente invasiva com recuperação rápida.</p>
                    
                    <ul class="service-benefits">
                        <li>Laser de ultima geração</li>
                        <li>Procedimento indolor</li>
                        <li>Cicatrização acelerada</li>
                        <li>Resultado imediato</li>
                    </ul>
                    
                    <div class="service-price">A partir de R$ 400</div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="services-cta loading">
                <h3>Não sabe qual tratamento é ideal para você?</h3>
                <p>Agende uma avaliação gratuita e receba um plano de tratamento personalizado com nossa tecnologia de design de sorriso 3D.</p>
                
                <div class="cta-buttons">
                    <a href="#contato" class="cta-primary">
                        ✨ Avaliação Gratuita
                    </a>
                    <a href="#galeria" class="cta-secondary">
                        Ver Resultados
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galeria" class="gallery">
        <div class="section-header">
            <h2>Transformações Reais</h2>
            <p>Veja os incríveis resultados obtidos com nossos tratamentos. Cada sorriso conta uma história de transformação e autoestima renovada.</p>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item loading">
                <div class="gallery-image">😊</div>
                <div class="gallery-content">
                    <h4 class="gallery-title">Facetas de Porcelana</h4>
                    <p class="gallery-description">Transformação completa com 10 facetas, correção de formato e cor.</p>
                </div>
            </div>

            <div class="gallery-item loading">
                <div class="gallery-image">✨</div>
                <div class="gallery-content">
                    <h4 class="gallery-title">Clareamento + Harmonização</h4>
                    <p class="gallery-description">Clareamento dental associado à harmonização facial para resultado perfeito.</p>
                </div>
            </div>

            <div class="gallery-item loading">
                <div class="gallery-image">💎</div>
                <div class="gallery-content">
                    <h4 class="gallery-title">Lentes de Contato</h4>
                    <p class="gallery-description">8 lentes de contato dental para sorriso hollywoodiano.</p>
                </div>
            </div>

            <div class="gallery-item loading">
                <div class="gallery-image">🌟</div>
                <div class="gallery-content">
                    <h4 class="gallery-title">Design de Sorriso</h4>
                    <p class="gallery-description">Planejamento digital seguido de tratamento completo.</p>
                </div>
            </div>

            <div class="gallery-item loading">
                <div class="gallery-image">👄</div>
                <div class="gallery-content">
                    <h4 class="gallery-title">Gengivoplastia</h4>
                    <p class="gallery-description">Remodelagem gengival para exposição ideal dos dentes.</p>
                </div>
            </div>

            <div class="gallery-item loading">
                <div class="gallery-image">🦷</div>
                <div class="gallery-content">
                    <h4 class="gallery-title">Restaurações Estéticas</h4>
                    <p class="gallery-description">Restaurações em resina para correção de pequenos defeitos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre" class="about">
        <div class="about-container">
            <div class="about-content loading">
                <h2>Dr. Excellence Silva</h2>
                <p>Especialista em Estética Dental com mais de 15 anos de experiência, formado pela USP e pós-graduado em Harmonização Orofacial pela UNIP. Membro da Sociedade Brasileira de Odontologia Estética.</p>
                
                <p>Minha missão é transformar sorrisos e elevar a autoestima dos meus pacientes através de tratamentos personalizados, utilizando as mais modernas técnicas e tecnologias disponíveis no mercado.</p>

                <div class="credentials">
                    <div class="credential">Graduação em Odontologia - USP</div>
                    <div class="credential">Especialização em Estética Dental</div>
                    <div class="credential">Pós-graduação em Harmonização Orofacial</div>
                    <div class="credential">Membro da SBOE</div>
                    <div class="credential">Certificação Internacional em Facetas</div>
                    <div class="credential">15+ anos de experiência</div>
                </div>

                <a href="#contato" class="btn-primary">
                    <span>👨‍⚕️</span> Conheça Minha História
                </a>
            </div>

            <div class="about-image loading">
                👨‍⚕️
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="section-header">
            <h2>O que Nossos Pacientes Dizem</h2>
            <p>Depoimentos reais de pessoas que transformaram seus sorrisos e suas vidas conosco.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card loading">
                <p class="testimonial-text">Sempre tive vergonha do meu sorriso. Após o tratamento com facetas, minha autoestima mudou completamente! Dr. Excellence é um verdadeiro artista. Recomendo de olhos fechados!</p>
                <div class="testimonial-author">
                    <div class="author-avatar">AS</div>
                    <div class="author-info">
                        <h4>Ana Silva</h4>
                        <p>Executiva, 32 anos</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card loading">
                <p class="testimonial-text">Profissional excepcional! Fiz clareamento e harmonização facial. O resultado superou minhas expectativas. Clínica moderna, atendimento humanizado e preço justo.</p>
                <div class="testimonial-author">
                    <div class="author-avatar">MC</div>
                    <div class="author-info">
                        <h4>Maria Costa</h4>
                        <p>Advogada, 28 anos</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card loading">
                <p class="testimonial-text">Após anos escondendo meu sorriso, finalmente encontrei um profissional que entendeu minhas necessidades. As lentes de contato ficaram perfeitas! Muito obrigado, doutor!</p>
                <div class="testimonial-author">
                    <div class="author-avatar">RA</div>
                    <div class="author-info">
                        <h4>Roberto Almeida</h4>
                        <p>Empresário, 45 anos</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq section" id="faq">
        <div class="section-header">
            <h2>Perguntas Frequentes</h2>
            <p>Tire suas dúvidas sobre nossos tratamentos estéticos e procedimentos. Estamos aqui para esclarecer tudo!</p>
        </div>

        <div class="faq-container">
            <div class="faq-item loading">
                <button class="faq-question">
                    Preciso agendar consulta antes do tratamento?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Sim, recomendamos sempre uma consulta de avaliação gratuita. Nela, analisamos seu caso, explicamos as opções de tratamento, fazemos o planejamento digital do seu novo sorriso e esclarecemos todas as dúvidas sobre procedimentos e valores.</p>
                </div>
            </div>

            <div class="faq-item loading">
                <button class="faq-question">
                    Quanto tempo duram as facetas de porcelana?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Com os cuidados adequados, as facetas de porcelana podem durar de 10 a 15 anos ou mais. Oferecemos garantia de 10 anos contra defeitos de fabricação e orientamos sobre todos os cuidados necessários para maximizar a durabilidade do seu investimento.</p>
                </div>
            </div>

            <div class="faq-item loading">
                <button class="faq-question">
                    O clareamento dental causa sensibilidade?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Utilizamos técnicas modernas e produtos de última geração que minimizam significativamente a sensibilidade. Quando ocorre, é temporária e leve. Aplicamos géis dessensibilizantes antes e após o procedimento para maior conforto do paciente.</p>
                </div>
            </div>

            <div class="faq-item loading">
                <button class="faq-question">
                    Lentes de contato dental machucam os dentes?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Não! As lentes de contato dental requerem desgaste mínimo ou nenhum desgaste do dente natural. É um procedimento conservador e reversível, preservando ao máximo a estrutura dentária original. São ultra-finas (0,2 a 0,5mm) e totalmente biocompatíveis.</p>
                </div>
            </div>

            <div class="faq-item loading">
                <button class="faq-question">
                    Quais formas de pagamento vocês aceitam?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Aceitamos dinheiro, PIX, cartão de débito e crédito (parcelamos em até 12x), e também trabalhamos com financiamento próprio em até 24 parcelas. Temos convênios com algumas empresas e planos odontológicos. Consulte condições especiais!</p>
                </div>
            </div>

            <div class="faq-item loading">
                <button class="faq-question">
                    A harmonização facial é segura?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Sim, é totalmente segura quando realizada por profissional habilitado. Dr. Excellence possui especialização em Harmonização Orofacial e utiliza apenas produtos certificados pela ANVISA. Todos os procedimentos seguem rigorosos protocolos de segurança e biossegurança.</p>
                </div>
            </div>

            <div class="faq-item loading">
                <button class="faq-question">
                    Vocês atendem emergências odontológicas?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Sim, atendemos emergências de nossos pacientes fidelizados. Para urgências, temos um número de WhatsApp exclusivo disponível 24h. Para novos pacientes em emergência, orientamos sobre os primeiros socorros e agendamos atendimento prioritário.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contato" class="contact">
        <div class="section-header">
            <h2>Agende sua Consulta</h2>
            <p>Transforme seu sorriso hoje mesmo. Entre em contato e agende sua avaliação gratuita.</p>
        </div>

        <div class="contact-container">
            <div class="contact-form loading">
                <h3>Solicite seu Orçamento</h3>
                <form>
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone/WhatsApp</label>
                        <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="tratamento">Tratamento de Interesse</label>
                        <select id="tratamento" name="tratamento" required>
                            <option value="">Selecione um tratamento</option>
                            <option value="facetas">Facetas de Porcelana</option>
                            <option value="clareamento">Clareamento Dental</option>
                            <option value="harmonizacao">Harmonização Facial</option>
                            <option value="lentes">Lentes de Contato</option>
                            <option value="design">Design de Sorriso</option>
                            <option value="gengivoplastia">Gengivoplastia</option>
                            <option value="avaliacao">Avaliação Completa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="4" placeholder="Conte-nos sobre suas expectativas e dúvidas..."></textarea>
                    </div>

                    <button type="submit" class="form-submit">
                        ✨ Solicitar Orçamento Gratuito
                    </button>
                </form>
            </div>

            <div class="contact-info loading">
                <h3>Informações de Contato</h3>
                
                <div class="info-item">
                    <div class="info-icon">📱</div>
                    <div class="info-text">
                        <h4>WhatsApp</h4>
                        <p>(11) 99999-9999</p>
                        <p class="info-highlight">Resposta rápida em até 5 minutos</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-text">
                        <h4>E-mail</h4>
                        <p>contato@drexcellence.com.br</p>
                        <p class="info-highlight">Retorno em até 2 horas úteis</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Endereço</h4>
                        <p>Av. Paulista, 1000 - Conj. 1205<br>Bela Vista - São Paulo/SP</p>
                        <p class="info-highlight">Estacionamento gratuito disponível</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">🕒</div>
                    <div class="info-text">
                        <h4>Horário de Atendimento</h4>
                        <p>Segunda à Sexta: 8h às 18h<br>Sábado: 8h às 14h</p>
                        <p class="info-highlight">Agendamentos online 24h</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Dr. Excellence</h3>
                <p>Especialista em Estética Dental com mais de 15 anos de experiência. Transformamos sorrisos e elevamos a autoestima dos nossos pacientes através de tratamentos personalizados e tecnologia de ponta.</p>
                <div class="social-links">
                    <a href="#" class="social-link instagram" aria-label="Instagram">📷</a>
                    <a href="#" class="social-link facebook" aria-label="Facebook">📘</a>
                    <a href="#" class="social-link tiktok" aria-label="TikTok">🎵</a>
                    <a href="#" class="social-link whatsapp" aria-label="WhatsApp">💬</a>
                    <a href="#" class="social-link youtube" aria-label="YouTube">🎥</a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Tratamentos</h3>
                <p><a href="#servicos">Facetas de Porcelana</a></p>
                <p><a href="#servicos">Clareamento Dental</a></p>
                <p><a href="#servicos">Harmonização Facial</a></p>
                <p><a href="#servicos">Lentes de Contato</a></p>
                <p><a href="#servicos">Design de Sorriso</a></p>
                <p><a href="#servicos">Gengivoplastia</a></p>
            </div>

            <div class="footer-section">
                <h3>Links Rápidos</h3>
                <p><a href="#home">Início</a></p>
                <p><a href="#sobre">Sobre o Doutor</a></p>
                <p><a href="#galeria">Galeria</a></p>
                <p><a href="#contato">Agendar Consulta</a></p>
                <p><a href="#">Blog</a></p>
                <p><a href="#">Perguntas Frequentes</a></p>
            </div>

            <div class="footer-section">
                <h3>Contato</h3>
                <p>📱 (11) 99999-9999</p>
                <p>📧 contato@drexcellence.com.br</p>
                <p>📍 Av. Paulista, 1000 - Conj. 1205</p>
                <p>Bela Vista - São Paulo/SP</p>
                <p>CEP: 01310-100</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Dr. Excellence - Estética Dental. Todos os direitos reservados. | CROSP: 12345 | Desenvolvido com ❤️ para o seu sorriso perfeito.</p>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/5511999999999?text=Olá! Gostaria de agendar uma consulta para transformar meu sorriso!" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
        <span class="whatsapp-icon">💬</span>
        <span>Fale Conosco</span>
    </a>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 4px 25px rgba(44, 82, 130, 0.15)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = 'none';
            }
        });

        // Loading animations with Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('loaded');
                }
            });
        }, observerOptions);

        // Observe all loading elements
        document.querySelectorAll('.loading').forEach(el => {
            observer.observe(el);
        });

        // Active navigation link update
        const updateActiveLink = () => {
            const sections = document.querySelectorAll('section[id]');
            sections.forEach(section => {
                const rect = section.getBoundingClientRect();
                const link = document.querySelector(`a[href="#${section.id}"]`);
                
                if (rect.top <= 150 && rect.bottom >= 150) {
                    document.querySelectorAll('.nav-links a').forEach(a => a.classList.remove('active'));
                    if (link) link.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', updateActiveLink);

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const nome = formData.get('nome');
            const telefone = formData.get('telefone');
            const tratamento = formData.get('tratamento');
            
            // Create WhatsApp message
            const message = `Olá! Meu nome é ${nome}. Gostaria de agendar uma consulta para ${tratamento}. Meu telefone é ${telefone}.`;
            const whatsappURL = `https://wa.me/5511999999999?text=${encodeURIComponent(message)}`;
            
            // Open WhatsApp
            window.open(whatsappURL, '_blank');
            
            // Show success message
            alert('Obrigado! Você será redirecionado para o WhatsApp para finalizar o agendamento.');
        });

        // Service card click effect
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', () => {
                card.style.transform = 'translateY(-12px) scale(0.98)';
                setTimeout(() => {
                    card.style.transform = '';
                }, 200);
            });
        });

        // Gallery item click effect
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                item.style.transform = 'translateY(-10px) scale(1.02)';
                setTimeout(() => {
                    item.style.transform = '';
                }, 300);
            });
        });

        // Initialize page with fade-in effect
        document.addEventListener('DOMContentLoaded', () => {
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.8s ease';
                document.body.style.opacity = '1';
            }, 100);
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');
                
                // Close all FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').classList.remove('active');
                });
                
                // Open clicked item if it wasn't active
                if (!isActive) {
                    faqItem.classList.add('active');
                    faqItem.querySelector('.faq-answer').classList.add('active');
                }
            });
        });

        // Mobile menu toggle (basic functionality)
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
        });

        // Add parallax effect to hero background elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroElements = document.querySelectorAll('.hero::before, .hero::after');
            heroElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.2);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>
</body>
</html>