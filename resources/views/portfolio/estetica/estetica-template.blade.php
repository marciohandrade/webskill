<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates Premiados - Design Inovador</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cursor-x: 0px;
            --cursor-y: 0px;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            overflow-x: hidden;
            cursor: default;
        }

        /* Scroll Progress Indicator */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(90deg, #ff6b9d, #c44569, #8e44ad);
            z-index: 1001;
            transition: width 0.1s ease;
        }

        /* TEMPLATE ESTÉTICA - REVOLUCIONÁRIO */
        .template-estetica {
            min-height: 100vh;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 107, 157, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(196, 69, 105, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(142, 68, 173, 0.2) 0%, transparent 50%),
                linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
            position: relative;
            overflow: hidden;
        }

        /* Floating Elements Background */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(255, 107, 157, 0.1), rgba(196, 69, 105, 0.1));
            animation: float 6s ease-in-out infinite;
        }

        .floating-shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-shape:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-shape:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 30%;
            left: 70%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(120deg); }
            66% { transform: translateY(10px) rotate(240deg); }
        }

        /* Revolutionary Header */
        .template-estetica .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            background: rgba(15, 15, 35, 0.9);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 107, 157, 0.2);
            transition: all 0.3s ease;
        }

        .template-estetica .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .template-estetica .logo {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(45deg, #ff6b9d, #c44569, #8e44ad);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease infinite;
            position: relative;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .template-estetica .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            position: relative;
        }

        .template-estetica .nav-link {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            padding: 8px 24px;
            border-radius: 50px;
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            overflow: hidden;
            display: flex;
            align-items: center;
            height: 40px;
        }

        .template-estetica .nav-link::before {
            content: '';
            position: absolute;
            top: 4px;
            left: -12px;
            right: -12px;
            bottom: 4px;
            background: radial-gradient(ellipse, #ff6b9d, #c44569);
            border-radius: 50px;
            opacity: 0;
            transform: scaleX(0);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: -1;
        }

        .template-estetica .nav-link:hover::before,
        .template-estetica .nav-link.active::before {
            opacity: 1;
            transform: scaleX(1);
        }

        .template-estetica .nav-link:hover,
        .template-estetica .nav-link.active {
            color: white;
            transform: translateY(-3px);
        }

        /* Revolutionary Hero Section */
        .template-estetica .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            max-width: 900px;
            padding: 0 2rem;
        }

        .template-estetica .hero h1 {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 700;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #fff 0%, #ff6b9d 50%, #c44569 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            line-height: 1.1;
        }

        .template-estetica .hero h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            border-radius: 2px;
            animation: pulse 2s ease infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: translateX(-50%) scaleX(1); }
            50% { opacity: 0.7; transform: translateX(-50%) scaleX(1.2); }
        }

        .template-estetica .hero p {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 3rem;
            line-height: 1.6;
            font-weight: 300;
        }

        .hero-cta {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            padding: 20px 40px;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 20px 40px rgba(255, 107, 157, 0.3);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .hero-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s ease;
        }

        .hero-cta:hover::before {
            left: 100%;
        }

        .hero-cta:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 30px 60px rgba(255, 107, 157, 0.4);
        }

        /* Morphing Services Section */
        .template-estetica .services {
            padding: 8rem 0;
            position: relative;
            z-index: 2;
        }

        .template-estetica .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .services-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .template-estetica .section-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: white;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .template-estetica .section-subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.7);
            max-width: 600px;
            margin: 0 auto;
            font-weight: 300;
        }

        /* Revolutionary Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            perspective: 1000px;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 3rem;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff6b9d, #c44569, #8e44ad, #ff6b9d);
            background-size: 300% 300%;
            border-radius: 30px;
            z-index: -1;
            opacity: 0;
            animation: gradientRotate 3s ease infinite;
            transition: opacity 0.3s ease;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        @keyframes gradientRotate {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .service-card:hover {
            transform: translateY(-20px) rotateX(5deg);
            box-shadow: 0 40px 80px rgba(0, 0, 0, 0.3);
        }

        .service-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            position: relative;
            transition: all 0.4s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotateY(180deg);
        }

        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            font-weight: 300;
        }

        /* Gallery Section */
        .template-estetica .gallery {
            padding: 8rem 0;
            background: rgba(255, 255, 255, 0.02);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .gallery-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 300px;
            background: linear-gradient(45deg, #ff6b9d, #c44569, #8e44ad);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover::before {
            opacity: 1;
        }

        .gallery-item:hover {
            transform: scale(1.05) translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .gallery-item:nth-child(1) {
            grid-column: span 2;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
        }

        .gallery-item:nth-child(4) {
            grid-column: span 2;
            background: linear-gradient(45deg, #8e44ad, #c44569);
        }

        .gallery-item:nth-child(6) {
            grid-row: span 2;
            height: auto;
            background: linear-gradient(45deg, #ff6b9d, #8e44ad);
        }

        /* Testimonials Section */
        .template-estetica .testimonials {
            padding: 8rem 0;
            background: linear-gradient(135deg, rgba(255, 107, 157, 0.05), rgba(196, 69, 105, 0.05));
        }

        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 3rem;
            text-align: center;
            position: relative;
            transition: all 0.4s ease;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 8rem;
            color: rgba(255, 107, 157, 0.3);
            font-family: serif;
            line-height: 1;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .testimonial-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .author-info h4 {
            color: white;
            margin-bottom: 0.5rem;
        }

        .author-info p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .stars {
            color: #ffd700;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
            
            .about-content,
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .about-text {
                order: 2;
            }
            
            .about-image {
                order: 1;
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .template-estetica .nav-menu {
                display: none;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .template-estetica .nav-container {
                padding: 15px 20px;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
            
            .social-links {
                gap: 1rem;
            }
            
            .hero-content {
                padding: 0 1rem;
            }
        }

        /* About Section */
        .template-estetica .about {
            padding: 8rem 0;
            background: rgba(255, 255, 255, 0.02);
            position: relative;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            color: white;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .about-text p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .about-image {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            height: 500px;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
        }

        /* Contact Section */
        .template-estetica .contact {
            padding: 8rem 0;
            background: linear-gradient(135deg, rgba(255, 107, 157, 0.1), rgba(196, 69, 105, 0.1));
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: start;
        }

        .contact-info h2 {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            color: white;
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 3rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-group label {
            display: block;
            color: white;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff6b9d;
            box-shadow: 0 0 20px rgba(255, 107, 157, 0.3);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .submit-btn {
            width: 100%;
            padding: 1.2rem;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            border: none;
            border-radius: 15px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 107, 157, 0.4);
        }

        /* Footer */
        .template-estetica .footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 3rem 0;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            color: rgba(255, 255, 255, 0.7);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem 0;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .social-link:hover {
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            transform: translateY(-3px);
        }

        /* Company Section - Rebalanced */
        .template-estetica .company {
            padding: 8rem 0;
            background: linear-gradient(135deg, rgba(255, 107, 157, 0.03), rgba(196, 69, 105, 0.03));
            position: relative;
        }

        .company-hero {
            text-align: center;
            margin-bottom: 6rem;
        }

        .company-hero h2 {
            font-size: clamp(2.5rem, 4vw, 3.5rem);
            color: white;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .company-hero p {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 800px;
            margin: 0 auto 3rem;
            line-height: 1.6;
        }

        .company-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-bottom: 6rem;
        }

        .stat-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2.5rem 1.5rem;
            transition: all 0.4s ease;
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        .company-story {
            max-width: 1000px;
            margin: 0 auto 6rem;
            text-align: center;
        }

        .company-story h3 {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            text-align: left;
        }

        .story-paragraph {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .highlight-text {
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600;
        }

        .values-section {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 30px;
            padding: 4rem;
            margin: 4rem 0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .values-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .values-text h4 {
            font-size: 2rem;
            color: white;
            margin-bottom: 2rem;
        }

        .values-text p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .values-list {
            display: grid;
            gap: 1.5rem;
        }

        .value-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .value-item:hover {
            background: rgba(255, 107, 157, 0.1);
            transform: translateX(10px);
        }

        .value-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #ff6b9d, #c44569);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .value-text {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        .team-intro {
            text-align: center;
            margin-bottom: 4rem;
        }

        .team-intro h3 {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 2rem;
        }

        .team-intro p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .team-highlight {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .team-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            padding: 3rem;
            transition: all 0.4s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .team-card h4 {
            font-size: 1.5rem;
            color: white;
            margin-bottom: 0.5rem;
        }

        .team-card .role {
            color: #ff6b9d;
            font-weight: 500;
            margin-bottom: 1.5rem;
        }

        .team-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }
        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Stagger animation for grid items */
        .reveal:nth-child(1) { transition-delay: 0.1s; }
        .reveal:nth-child(2) { transition-delay: 0.2s; }
        .reveal:nth-child(3) { transition-delay: 0.3s; }
        .reveal:nth-child(4) { transition-delay: 0.4s; }
        .reveal:nth-child(5) { transition-delay: 0.5s; }
        .reveal:nth-child(6) { transition-delay: 0.6s; }
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10000;
            transition: opacity 0.5s ease;
        }

        .loading-text {
            color: white;
            font-size: 2rem;
            font-weight: 600;
            animation: loadingPulse 1.5s ease infinite;
        }

        @keyframes loadingPulse {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.05); }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-text">Carregando Experiência...</div>
    </div>

    <!-- Scroll Progress -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- TEMPLATE ESTÉTICA REVOLUCIONÁRIO -->
    <div id="template-estetica" class="template template-estetica active">
        <!-- Floating Background Elements -->
        <div class="floating-elements">
            <div class="floating-shape"></div>
            <div class="floating-shape"></div>
            <div class="floating-shape"></div>
        </div>

        <!-- Revolutionary Header -->
        <header class="header">
            <nav class="nav-container">
                <div class="logo">✨ LUMIÈRE</div>
                <ul class="nav-menu">
                    <li><a href="#" class="nav-link active">Início</a></li>
                    <li><a href="#" class="nav-link">Experiências</a></li>
                    <li><a href="#" class="nav-link">Transformações</a></li>
                    <li><a href="#" class="nav-link">Universo</a></li>
                    <li><a href="#" class="nav-link">Conexão</a></li>
                </ul>
            </nav>
        </header>

        <!-- Revolutionary Hero -->
        <section class="hero" id="inicio">
            <div class="hero-content">
                <h1>Redefina Sua Essência</h1>
                <p>Uma jornada transformadora onde arte, ciência e intuição se encontram para despertar a versão mais luminosa de você.</p>
                <a href="#" class="hero-cta">
                    Iniciar Transformação ✨
                </a>
            </div>
        </section>

        <!-- Company Section -->
        <section class="company" id="empresa">
            <div class="container">
                <div class="company-hero">
                    <h2>Lumière Studio</h2>
                    <p>Há mais de 10 anos transformando vidas através da beleza. Somos pioneiros em técnicas inovadoras e referência em excelência no segmento de estética premium em São Paulo.</p>
                </div>

                <div class="company-stats">
                    <div class="stat-item reveal">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Anos de Experiência</div>
                    </div>
                    <div class="stat-item reveal">
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">Clientes Atendidas</div>
                    </div>
                    <div class="stat-item reveal">
                        <div class="stat-number">15</div>
                        <div class="stat-label">Especialistas</div>
                    </div>
                    <div class="stat-item reveal">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfação</div>
                    </div>
                </div>

                <div class="company-story reveal">
                    <h3>Nossa Jornada de Excelência</h3>
                    <div class="story-content">
                        <p class="story-paragraph">
                            O <span class="highlight-text">Lumière Studio</span> nasceu do sonho de criar um espaço onde a beleza e o bem-estar se encontram em perfeita harmonia. Fundado em 2014 por nossa diretora técnica Dra. Clara Mendes, iniciamos com uma visão revolucionária: <span class="highlight-text">combinar técnicas ancestrais com tecnologia de ponta</span> para despertar a beleza única de cada cliente.
                        </p>
                        
                        <p class="story-paragraph">
                            Ao longo desta década, construímos uma reputação sólida baseada em <span class="highlight-text">inovação, qualidade e cuidado personalizado</span>. Nosso espaço de 400m² nos Jardins foi cuidadosamente projetado para proporcionar uma experiência transformadora, onde cada detalhe contribui para seu momento de renovação e autoconexão.
                        </p>

                        <p class="story-paragraph">
                            Hoje, somos reconhecidos como referência em estética premium, com uma equipe de especialistas certificados internacionalmente e equipamentos de última geração. <span class="highlight-text">Mais que um centro de beleza, somos um santuário de transformação</span> onde cada cliente é recebida como única e especial.
                        </p>
                    </div>
                </div>

                <div class="values-section reveal">
                    <div class="values-grid">
                        <div class="values-text">
                            <h4>Nossos Pilares Fundamentais</h4>
                            <p>
                                Acreditamos que a verdadeira beleza emerge quando técnica, cuidado e respeito à individualidade se encontram. Nossos valores não são apenas palavras - são princípios que guiam cada procedimento, cada interação e cada momento da sua experiência conosco.
                            </p>
                            <p>
                                Estes pilares foram construídos ao longo de nossa jornada e representam nosso compromisso inabalável com a excelência e o bem-estar de cada cliente que confia em nossa expertise.
                            </p>
                        </div>
                        
                        <div class="values-list">
                            <div class="value-item">
                                <div class="value-icon">🎯</div>
                                <div class="value-text">Excelência em cada procedimento</div>
                            </div>
                            <div class="value-item">
                                <div class="value-icon">🔬</div>
                                <div class="value-text">Inovação constante em técnicas</div>
                            </div>
                            <div class="value-item">
                                <div class="value-icon">💎</div>
                                <div class="value-text">Respeito à individualidade</div>
                            </div>
                            <div class="value-item">
                                <div class="value-icon">🤝</div>
                                <div class="value-text">Ética e transparência sempre</div>
                            </div>
                            <div class="value-item">
                                <div class="value-icon">🏠</div>
                                <div class="value-text">Ambiente acolhedor e seguro</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-intro reveal">
                    <h3>Especialistas em Transformação</h3>
                    <p>
                        Nossa equipe é formada por profissionais apaixonados, com formação internacional e anos de experiência. Cada especialista foi cuidadosamente selecionado não apenas por sua competência técnica, mas também por compartilhar nossa filosofia de cuidado integral e personalizado.
                    </p>
                </div>

                <div class="team-highlight">
                    <div class="team-card reveal">
                        <h4>Dra. Clara Mendes</h4>
                        <div class="role">Diretora Técnica & Fundadora</div>
                        <p>
                            Biomédica especialista em estética avançada com mais de 15 anos de experiência e formação internacional. Pioneira em técnicas de rejuvenescimento não-invasivo, Clara é a mente criativa por trás dos protocolos exclusivos do Lumière.
                        </p>
                    </div>

                    <div class="team-card reveal">
                        <h4>Marina Silva</h4>
                        <div class="role">Hair Stylist Master</div>
                        <p>
                            Especialista em colorimetria e cortes autorais com formação em Paris e Milão. Marina é reconhecida como referência em transformações capilares, criando looks únicos que refletem a personalidade de cada cliente.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials" id="depoimentos">
            <div class="container">
                <div class="services-header">
                    <h2 class="section-title">Vozes da Transformação</h2>
                    <p class="section-subtitle">Histórias reais de quem viveu a experiência Lumière</p>
                </div>
                
                <div class="testimonials-container">
                    <div class="testimonial-card reveal">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">
                            "A experiência no Lumière foi transformadora! Não foi apenas um tratamento estético, foi uma jornada de autoconhecimento e amor próprio. Saí de lá me sentindo uma nova pessoa."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MC</div>
                            <div class="author-info">
                                <h4>Maria Clara</h4>
                                <p>Executiva, 35 anos</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card reveal">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">
                            "O cuidado com cada detalhe é impressionante. Desde a recepção até o resultado final, tudo foi perfeito. Minha autoestima nunca esteve tão elevada!"
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">AS</div>
                            <div class="author-info">
                                <h4>Ana Sofia</h4>
                                <p>Advogada, 29 anos</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card reveal">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-text">
                            "Profissionais excepcionais e ambiente acolhedor. Cada visita é uma experiência única. Recomendo para todas as mulheres que buscam excelência e qualidade."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">LR</div>
                            <div class="author-info">
                                <h4>Luiza Rodrigues</h4>
                                <p>Empresária, 42 anos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Morphing Services -->
        <section class="services" id="servicos">
            <div class="container">
                <div class="services-header">
                    <h2 class="section-title">Experiências Transcendentais</h2>
                    <p class="section-subtitle">Cada serviço é uma obra de arte personalizada para sua jornada única</p>
                </div>
                
                <div class="services-grid">
                    <div class="service-card reveal">
                        <div class="service-icon">🌸</div>
                        <h3>Rituais Faciais Alquímicos</h3>
                        <p>Protocolos exclusivos que combinam tecnologia quântica com ingredientes raros, criando uma sinfonia de rejuvenescimento celular.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">💎</div>
                        <h3>Arte das Mãos Divinas</h3>
                        <p>Cada unha é uma tela onde criamos obras de arte únicas, utilizando técnicas ancestrais e materiais preciosos.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">🔮</div>
                        <h3>Metamorfose Capilar</h3>
                        <p>Transformações que vão além do corte - uma reinvenção completa que reflete sua alma interior através dos fios.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">🌊</div>
                        <h3>Harmonização Corporal</h3>
                        <p>Terapias que alinham corpo, mente e espírito através de toques terapêuticos e energias restaurativas.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">👁️</div>
                        <h3>Arquitetura do Olhar</h3>
                        <p>Sobrancelhas e cílios desenhados como joias preciosas que emolduram a janela da sua alma.</p>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">⭐</div>
                        <h3>Jornadas Completas</h3>
                        <p>Experiências imersivas de um dia inteiro onde cada detalhe é orquestrado para sua transformação total.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery" id="galeria">
            <div class="container">
                <div class="services-header">
                    <h2 class="section-title">Galeria de Transformações</h2>
                    <p class="section-subtitle">Cada imagem conta uma história de beleza e renovação</p>
                </div>
                
                <div class="gallery-grid">
                    <div class="gallery-item reveal">
                        ✨ Tratamentos Faciais
                    </div>
                    <div class="gallery-item reveal">
                        💄 Maquiagem
                    </div>
                    <div class="gallery-item reveal">
                        💅 Nail Art
                    </div>
                    <div class="gallery-item reveal">
                        ✂️ Hair Design
                    </div>
                    <div class="gallery-item reveal">
                        👁️ Sobrancelhas
                    </div>
                    <div class="gallery-item reveal">
                        🌸 Ambiente
                    </div>
                    <div class="gallery-item reveal">
                        💎 Resultados
                    </div>
                    <div class="gallery-item reveal">
                        🔮 Inovação
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" id="sobre">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>Onde Arte Encontra Ciência</h2>
                        <p>Por mais de uma década, temos sido pioneiros em técnicas revolucionárias que transcendem os limites tradicionais da estética. Nossa filosofia única combina ancestralidade e inovação.</p>
                        <p>Cada profissional da nossa equipe é um artista especializado, com formação internacional e paixão genuína por despertar a beleza única de cada cliente.</p>
                        <a href="#" class="hero-cta">Nossa História ✨</a>
                    </div>
                    <div class="about-image">
                        🌸 Espaço Zen
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact" id="contato">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Conecte-se Conosco</h2>
                        
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <h4>Nosso Santuário</h4>
                                <p>Rua das Flores, 123 - Jardins<br>São Paulo - SP</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div>
                                <h4>Atendimento VIP</h4>
                                <p>(11) 9999-9999<br>Segunda a Sábado, 9h às 19h</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div>
                                <h4>Experiências Digitais</h4>
                                <p>contato@lumiere.com.br<br>Instagram: @lumiere.studio</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <form>
                            <div class="form-group">
                                <label for="name">Seu Nome</label>
                                <input type="text" id="name" name="name" placeholder="Como podemos te chamar?">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="seu@email.com">
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">WhatsApp</label>
                                <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999">
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Sua Visão</label>
                                <textarea id="message" name="message" rows="4" placeholder="Conte-nos sobre seus sonhos de transformação..."></textarea>
                            </div>
                            
                            <button type="submit" class="submit-btn">Iniciar Jornada ✨</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="social-links">
                        <a href="#" class="social-link">📸</a>
                        <a href="#" class="social-link">📱</a>
                        <a href="#" class="social-link">💌</a>
                        <a href="#" class="social-link">🎵</a>
                    </div>
                    <p>&copy; 2025 Lumière Studio. Todos os direitos reservados.</p>
                    <p>Criado com amor e inovação em São Paulo ✨</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Remove loading screen
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.getElementById('loadingOverlay').style.opacity = '0';
                setTimeout(() => {
                    document.getElementById('loadingOverlay').style.display = 'none';
                }, 500);
            }, 1000);
        });

        // Scroll Reveal Animation
        function revealElements() {
            const reveals = document.querySelectorAll('.reveal');
            
            reveals.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        }

        // Combined scroll event listener
        window.addEventListener('scroll', () => {
            // Scroll Progress
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.offsetHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            document.getElementById('scrollProgress').style.width = scrollPercent + '%';
            
            // Reveal animations
            revealElements();
            
            // Update active menu item
            let current = '';
            const scrollPosition = window.scrollY + 200;
            const sections = document.querySelectorAll('section[id]');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            const navLinks = document.querySelectorAll('.template-estetica .nav-link');
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Initial reveal check
        document.addEventListener('DOMContentLoaded', function() {
            revealElements();
        });

        // Navigation Active State and Smooth Scroll
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.template-estetica .nav-link');
            const sections = document.querySelectorAll('section[id]');
            
            // Smooth scroll functionality
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        const headerHeight = document.querySelector('.header').offsetHeight;
                        const targetPosition = targetSection.offsetTop - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                    
                    // Update active state
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Parallax Effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const shapes = document.querySelectorAll('.floating-shape');
            
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.5;
                shape.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
            });
        });

        // Interactive hover effects
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-20px) rotateX(5deg) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0) scale(1)';
            });
        });

        // Form Enhancement
        document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>