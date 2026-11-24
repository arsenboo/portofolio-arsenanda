<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arsenanda | Portofolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg-main: #ffffff;
      --bg-soft: #fff6f9;
      --pink-light: #ffe4ee;
      --pink-mid: #fbcfe8;
      --pink-accent: #f472b6;
      --pink-dark: #db2777;
      --text-main: #2d2428;
      --text-muted: #6e5d64;
      --border-soft: #fce7f3;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-main);
      color: var(--text-main);
      line-height: 1.7;
      overflow-x: hidden;
    }

    body.bg-canvas {
      background-color: #fffcfd;
      background-image:
        radial-gradient(circle at 12% 18%, rgba(244, 114, 182, 0.11) 0%, transparent 38%),
        radial-gradient(circle at 88% 28%, rgba(251, 207, 232, 0.22) 0%, transparent 42%),
        radial-gradient(#f9a8d4 0.85px, transparent 0.85px);
      background-size: 100% 100%, 100% 100%, 24px 24px;
      background-position: 0 0, 0 0, 0 0;
    }

    /* Floating Pill Navbar */
    .nav-wrapper {
      position: sticky;
      top: 1.2rem;
      z-index: 100;
      display: flex;
      justify-content: center;
      padding: 0 1rem;
    }

    nav {
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(12px);
      border: 1.5px solid var(--pink-light);
      box-shadow: 0 10px 25px rgba(244, 114, 182, 0.12);
      padding: 0.5rem 1rem;
      border-radius: 50px;
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    nav a {
      text-decoration: none;
      color: var(--text-main);
      font-size: 0.9rem;
      font-weight: 500;
      padding: 0.45rem 1.1rem;
      border-radius: 50px;
      transition: all 0.25s ease;
    }

    nav a:hover, nav a.active {
      background: var(--pink-accent);
      color: #fff;
    }

    /* Step 1: Hero Section */
    .hero {
      min-height: 85vh;
      max-width: 1120px;
      margin: 0 auto;
      padding: 3rem 8%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 3rem;
    }

    .hero-text {
      max-width: 600px;
    }

    .badge {
      display: inline-block;
      background: var(--pink-light);
      color: var(--pink-dark);
      font-size: 0.8rem;
      font-weight: 600;
      padding: 0.3rem 0.9rem;
      border-radius: 50px;
      margin-bottom: 0.8rem;
    }

    .hero-text h1 {
      font-size: 2.5rem;
      line-height: 1.25;
      margin-bottom: 0.6rem;
    }

    .hero-text h1 span {
      color: var(--pink-dark);
    }

    .role {
      font-size: 1rem;
      font-weight: 500;
      color: var(--pink-dark);
      margin-bottom: 1rem;
    }

    .hero-text p {
      color: var(--text-muted);
      margin-bottom: 1.8rem;
    }

    .btn-group {
      display: flex;
      gap: 0.9rem;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: var(--pink-accent);
      color: #fff;
      padding: 0.78rem 1.5rem;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.25s ease;
    }

    .btn-primary:hover {
      background: var(--pink-dark);
      transform: translateY(-2px);
    }

    .btn-outline {
      border: 1.5px solid var(--pink-accent);
      color: var(--pink-dark);
      padding: 0.78rem 1.5rem;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 500;
      background: #fff;
      transition: background 0.25s ease;
    }

    .btn-outline:hover {
      background: var(--bg-soft);
    }

    .hero-card {
      width: 285px;
      background: linear-gradient(145deg, var(--pink-light), var(--bg-soft));
      border: 2px solid var(--border-soft);
      border-radius: 28px;
      padding: 1.6rem;
      text-align: center;
      box-shadow: 0 12px 28px rgba(244, 114, 182, 0.12);
    }

    .avatar-wrap {
      width: 145px;
      height: 145px;
      border-radius: 50%;
      border: 3px solid var(--pink-accent);
      overflow: hidden;
      margin: 0 auto 1rem;
      background: #fff;
    }

    .avatar-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
    }

    /* Step 2: About Section */
    .about-section {
      max-width: 1120px;
      margin: 0 auto;
      padding: 4.5rem 8%;
    }

    .about-title-center {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--pink-dark);
      margin-bottom: 2.5rem;
    }

    .about-top {
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      align-items: center;
      gap: 2rem;
      background: rgba(255, 246, 249, 0.92);
      backdrop-filter: blur(6px);
      border: 1.5px solid var(--border-soft);
      border-radius: 28px;
      padding: 2.2rem;
      margin-bottom: 3rem;
    }

    .about-left h3 {
      font-size: 1.5rem;
      color: var(--pink-dark);
      margin-bottom: 0.4rem;
    }

    .about-left .big-name {
      font-size: 1.8rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 1.2rem;
    }

    .interactive-photo-box {
      width: 210px;
      height: 250px;
      border-radius: 24px;
      border: 3px solid var(--pink-accent);
      background: var(--pink-light);
      overflow: hidden;
      position: relative;
      cursor: pointer;
      box-shadow: 0 12px 26px rgba(244, 114, 182, 0.18);
      transition: transform 0.3s ease;
    }

    .interactive-photo-box:hover {
      transform: translateY(-4px) rotate(-1deg);
    }

    .interactive-photo-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
      transition: filter 0.3s ease, transform 0.3s ease;
    }

    .interactive-photo-box.mode-pink img {
      filter: saturate(1.25) contrast(1.05);
      transform: scale(1.03);
    }

    .interactive-photo-box.mode-soft img {
      filter: brightness(1.06) contrast(0.95);
    }

    .photo-hint {
      position: absolute;
      bottom: 8px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(255, 255, 255, 0.9);
      color: var(--pink-dark);
      font-size: 0.7rem;
      font-weight: 600;
      padding: 0.2rem 0.7rem;
      border-radius: 50px;
      white-space: nowrap;
    }

    .about-right p {
      color: var(--text-muted);
      margin-bottom: 1.2rem;
      font-size: 0.95rem;
    }

    .edu-exp-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2.5rem;
    }

    .column-heading {
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--pink-dark);
      margin-bottom: 1.2rem;
      padding-bottom: 0.5rem;
      border-bottom: 2px solid var(--pink-light);
    }

    .timeline-card {
      background: rgba(255, 255, 255, 0.94);
      border: 1.5px solid var(--border-soft);
      border-left: 4px solid var(--pink-accent);
      border-radius: 16px;
      padding: 1.1rem 1.3rem;
      margin-bottom: 1rem;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .timeline-card:hover {
      transform: translateX(4px);
      box-shadow: 0 8px 20px rgba(244, 114, 182, 0.1);
    }

    .timeline-period {
      font-size: 0.78rem;
      font-weight: 600;
      color: var(--pink-dark);
      background: var(--bg-soft);
      display: inline-block;
      padding: 0.15rem 0.65rem;
      border-radius: 50px;
      margin-bottom: 0.4rem;
    }

    .timeline-card h4 {
      font-size: 1rem;
      color: var(--text-main);
      margin-bottom: 0.2rem;
    }

    .timeline-card p {
      font-size: 0.86rem;
      color: var(--text-muted);
    }

    /* Skills Strip */
    .skills-box {
      margin-top: 2.5rem;
      background: rgba(255, 246, 249, 0.92);
      border: 1.5px solid var(--border-soft);
      border-radius: 24px;
      padding: 1.8rem;
    }

    .skills-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-bottom: 1.2rem;
    }

    .skills-header h3 {
      font-size: 1.25rem;
      color: var(--pink-dark);
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 1.1rem;
    }

    .skill-group {
      background: rgba(255, 255, 255, 0.95);
      border: 1px solid var(--pink-light);
      border-radius: 18px;
      padding: 1rem 1.1rem;
    }

    .skill-group-title {
      font-size: 0.82rem;
      font-weight: 700;
      color: var(--pink-dark);
      margin-bottom: 0.65rem;
      display: block;
    }

    .skill-chips {
      display: flex;
      flex-wrap: wrap;
      gap: 0.45rem;
    }

    .skill-chip {
      background: var(--bg-soft);
      color: var(--text-main);
      border: 1px solid var(--pink-light);
      font-size: 0.78rem;
      font-weight: 500;
      padding: 0.25rem 0.7rem;
      border-radius: 50px;
      transition: all 0.2s ease;
    }

    .skill-chip:hover {
      background: var(--pink-accent);
      color: #fff;
      border-color: var(--pink-accent);
    }

    /* Step 3: Interactive Folders */
    .folders-section {
      max-width: 1120px;
      margin: 0 auto;
      padding: 3rem 8% 4.5rem;
    }

    .folders-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 2rem;
      margin-top: 2rem;
    }

    .folder-card {
      position: relative;
      height: 205px;
      cursor: pointer;
      display: flex;
      align-items: flex-end;
      padding-top: 38px;
    }

    .folder-back {
      position: absolute;
      inset: 28px 0 0 0;
      background: var(--pink-mid);
      border-radius: 22px;
      transition: transform 0.3s ease;
    }

    .folder-back::before {
      content: '';
      position: absolute;
      top: -14px;
      left: 0;
      width: 44%;
      height: 22px;
      background: var(--pink-mid);
      border-radius: 14px 14px 0 0;
    }

    .folder-sheet {
      position: absolute;
      left: 10%;
      right: 10%;
      bottom: 24px;
      height: 135px;
      background: #fff;
      border: 1.5px solid var(--pink-light);
      border-radius: 14px;
      box-shadow: 0 8px 18px rgba(244, 114, 182, 0.12);
      transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .sheet-label {
      font-size: 0.78rem;
      font-weight: 600;
      color: var(--pink-dark);
      background: var(--bg-soft);
      padding: 0.25rem 0.65rem;
      border-radius: 8px;
    }

    .folder-sheet.s1 {
      transform: rotate(-4deg) translateY(0);
      z-index: 1;
    }

    .folder-sheet.s2 {
      transform: rotate(3deg) translateY(0);
      z-index: 2;
      background: var(--bg-soft);
    }

    .folder-card:hover .folder-sheet.s1 {
      transform: rotate(-8deg) translate(-10px, -42px);
    }

    .folder-card:hover .folder-sheet.s2 {
      transform: rotate(6deg) translate(10px, -50px);
    }

    .folder-front {
      position: relative;
      z-index: 3;
      width: 100%;
      height: 142px;
      background: linear-gradient(145deg, rgba(255, 255, 255, 0.94), rgba(255, 228, 238, 0.96));
      backdrop-filter: blur(8px);
      border: 1.5px solid var(--pink-accent);
      border-radius: 22px;
      padding: 1.35rem 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      box-shadow: 0 12px 24px rgba(244, 114, 182, 0.14);
      transition: transform 0.3s ease;
    }

    .folder-card:hover .folder-front {
      transform: translateY(3px);
    }

    .folder-count {
      font-size: 1.85rem;
      font-weight: 800;
      color: var(--pink-dark);
      line-height: 1.1;
    }

    .folder-label {
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--text-main);
    }

    .folder-dots {
      background: var(--pink-light);
      color: var(--pink-dark);
      padding: 0.25rem 0.7rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 700;
    }

    /* Step 4: Portofolio Tabs & Modal Preview */
    .portofolio-section {
      max-width: 1120px;
      margin: 0 auto;
      padding: 4.5rem 8%;
    }

    .portofolio-header {
      text-align: center;
      margin-bottom: 2.2rem;
    }

    .portofolio-big-title {
      font-size: 2.7rem;
      font-weight: 800;
      letter-spacing: 3px;
      color: var(--pink-dark);
      margin-bottom: 1.2rem;
    }

    .tab-bar {
      display: inline-flex;
      background: var(--bg-soft);
      border: 1.5px solid var(--pink-light);
      padding: 0.4rem;
      border-radius: 50px;
      gap: 0.4rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .tab-btn {
      border: none;
      background: transparent;
      padding: 0.6rem 1.4rem;
      border-radius: 50px;
      font-family: inherit;
      font-weight: 600;
      font-size: 0.9rem;
      color: var(--text-muted);
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .tab-btn.active {
      background: var(--pink-accent);
      color: #fff;
      box-shadow: 0 4px 12px rgba(244, 114, 182, 0.3);
    }

    .tab-panel {
      display: none;
      animation: fadeSlide 0.35s ease;
    }

    .tab-panel.active {
      display: block;
    }

    @keyframes fadeSlide {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .cards-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.6rem;
    }

    .item-card {
      background: rgba(255, 255, 255, 0.96);
      border: 1.5px solid var(--border-soft);
      border-radius: 22px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .item-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 28px rgba(244, 114, 182, 0.14);
    }

    .item-thumb {
      height: 190px;
      background: linear-gradient(135deg, var(--pink-light), var(--bg-soft));
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }

    .item-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .thumb-pill {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background: rgba(255, 255, 255, 0.92);
      color: var(--pink-dark);
      padding: 0.3rem 0.8rem;
      border-radius: 10px;
      font-weight: 600;
      font-size: 0.76rem;
      border: 1px solid var(--pink-light);
    }

    .coming-soon-box {
      background: rgba(255, 246, 249, 0.95);
      border: 1.5px dashed var(--pink-accent);
      border-radius: 24px;
      padding: 3rem 2rem;
      text-align: center;
      max-width: 560px;
      margin: 0 auto;
    }

    .coming-soon-box h3 {
      font-size: 1.45rem;
      color: var(--pink-dark);
      margin-bottom: 0.5rem;
    }

    .coming-soon-box p {
      color: var(--text-muted);
      font-size: 0.92rem;
      margin-bottom: 1.4rem;
    }

    .coming-soon-box .btn-view {
      display: inline-block;
      align-self: center;
    }

    .item-body {
      padding: 1.4rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex: 1;
    }

    .item-body h3 {
      font-size: 1.05rem;
      margin-bottom: 0.45rem;
      color: var(--text-main);
    }

    .item-body p {
      font-size: 0.88rem;
      color: var(--text-muted);
      margin-bottom: 1.2rem;
    }

    .btn-view {
      align-self: flex-start;
      background: var(--pink-accent);
      color: #fff;
      border: none;
      padding: 0.52rem 1.15rem;
      border-radius: 10px;
      font-family: inherit;
      font-size: 0.82rem;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.2s ease;
    }

    .btn-view:hover {
      background: var(--pink-dark);
    }

    /* Expandable Other Certificates */
    .other-cert-wrap {
      margin-top: 2.2rem;
      text-align: center;
    }

    .btn-toggle-cert {
      background: var(--bg-soft);
      color: var(--pink-dark);
      border: 1.5px solid var(--pink-accent);
      padding: 0.65rem 1.4rem;
      border-radius: 50px;
      font-family: inherit;
      font-size: 0.88rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.25s ease;
    }

    .btn-toggle-cert:hover {
      background: var(--pink-light);
    }

    .other-cert-list {
      display: none;
      margin-top: 1.5rem;
      text-align: left;
      background: rgba(255, 255, 255, 0.96);
      border: 1.5px solid var(--border-soft);
      border-radius: 22px;
      padding: 1.4rem;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 0.9rem;
    }

    .other-cert-list.show {
      display: grid;
      animation: fadeSlide 0.3s ease;
    }

    .mini-cert-item {
      background: var(--bg-soft);
      border: 1px solid var(--pink-light);
      border-radius: 14px;
      padding: 0.85rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 0.8rem;
    }

    .mini-cert-item h4 {
      font-size: 0.86rem;
      color: var(--text-main);
      margin-bottom: 0.15rem;
    }

    .mini-cert-item span {
      font-size: 0.75rem;
      color: var(--text-muted);
      display: block;
    }

    .mini-cert-btn {
      background: #fff;
      color: var(--pink-dark);
      border: 1px solid var(--pink-accent);
      padding: 0.32rem 0.7rem;
      border-radius: 8px;
      font-size: 0.75rem;
      font-weight: 600;
      cursor: pointer;
      white-space: nowrap;
    }

    .mini-cert-btn:hover {
      background: var(--pink-accent);
      color: #fff;
    }

    /* Step 5: Scattered Polaroid Collage & Contact */
    .collage-section {
      max-width: 1120px;
      margin: 0 auto 4.5rem;
      padding: 3.5rem 6%;
      background: rgba(255, 246, 249, 0.92);
      border: 1.5px solid var(--border-soft);
      border-radius: 30px;
      text-align: center;
    }

    .collage-title {
      font-size: 2rem;
      font-weight: 700;
      color: var(--pink-dark);
      margin-bottom: 0.5rem;
    }

    .collage-sub {
      color: var(--text-muted);
      max-width: 540px;
      margin: 0 auto 2.2rem;
      font-size: 0.95rem;
    }

    .polaroid-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.6rem;
    }

    .polaroid {
      background: #fff;
      padding: 0.75rem 0.75rem 1.2rem;
      border-radius: 14px;
      border: 1px solid var(--border-soft);
      box-shadow: 0 10px 22px rgba(244, 114, 182, 0.14);
      width: 215px;
      transition: transform 0.3s ease;
      cursor: pointer;
    }

    .polaroid:nth-child(odd) { transform: rotate(-3deg); }
    .polaroid:nth-child(even) { transform: rotate(2.5deg); }

    .polaroid:hover {
      transform: rotate(0deg) scale(1.07);
      z-index: 10;
    }

    .polaroid-img {
      width: 100%;
      height: 155px;
      border-radius: 10px;
      background: var(--pink-light);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--pink-dark);
      font-size: 0.8rem;
      font-weight: 600;
    }

    .polaroid-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top;
    }

    .polaroid-caption {
      margin-top: 0.75rem;
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--text-main);
    }

    .contact-section {
      max-width: 1120px;
      margin: 0 auto 4rem;
      padding: 0 8%;
    }

    .contact-box {
      text-align: center;
      background: linear-gradient(135deg, var(--bg-soft), var(--pink-light));
      padding: 3.5rem 2rem;
      border-radius: 28px;
      border: 1.5px solid var(--border-soft);
    }

    .contact-box h2 {
      font-size: 2rem;
      color: var(--pink-dark);
      margin-bottom: 0.75rem;
    }

    .contact-box p {
      max-width: 540px;
      margin: 0 auto 1.8rem;
      color: var(--text-muted);
    }

    .social-links {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    footer {
      text-align: center;
      padding: 2rem;
      font-size: 0.85rem;
      color: var(--text-muted);
      border-top: 1px solid var(--border-soft);
      background: rgba(255, 255, 255, 0.8);
    }

    /* Modal Popup Preview */
    .preview-modal {
      display: none;
      position: fixed;
      inset: 0;
      z-index: 999;
      background: rgba(45, 36, 40, 0.65);
      backdrop-filter: blur(4px);
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
    }

    .preview-modal.open {
      display: flex;
    }

    .modal-card {
      background: #fff;
      border-radius: 24px;
      max-width: 580px;
      width: 100%;
      padding: 1.8rem;
      border: 2px solid var(--pink-light);
      text-align: center;
      position: relative;
    }

    .modal-close {
      position: absolute;
      top: 1rem;
      right: 1.2rem;
      background: var(--pink-light);
      color: var(--pink-dark);
      border: none;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      font-weight: 700;
      cursor: pointer;
    }

    .modal-card img {
      width: 100%;
      max-height: 360px;
      object-fit: contain;
      border-radius: 14px;
      margin-bottom: 1rem;
      background: var(--bg-soft);
    }

    @media (max-width: 860px) {
      .hero {
        flex-direction: column-reverse;
        text-align: center;
        padding-top: 2rem;
      }
      .btn-group {
        justify-content: center;
      }
      .hero-text h1 {
        font-size: 2rem;
      }
      .about-top {
        grid-template-columns: 1fr;
        text-align: center;
      }
      .interactive-photo-box {
        margin: 0 auto;
      }
      .edu-exp-grid {
        grid-template-columns: 1fr;
      }
      .portofolio-big-title {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body class="bg-canvas">

  <div class="nav-wrapper">
    <nav>
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#portofolio">Portofolio</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>

  <!-- Step 1: Hero -->
  <section id="home" class="hero">
    <div class="hero-text">
      <span class="badge">Halo, Selamat Datang ✨</span>
      <h1>Aku <span>Arsenanda Gilang Permatasari</span></h1>
      <div class="role">Information Systems Student • Aspiring BI & Data Analyst</div>
      <p>
        Mahasiswa Sistem Informasi semester 3 di Telkom University Surabaya yang suka ngulik angka dan alur kerja—dari database, dashboard, sampai bikin tampilan web dan desain yang nggak bikin orang pusing.
      </p>
      <div class="btn-group">
        <a href="#portofolio" class="btn-primary">Lihat Karya</a>
        <a href="#contact" class="btn-outline">Hubungi Aku</a>
      </div>
    </div>

    <div class="hero-card">
      <div class="avatar-wrap">
        <img src="{{ asset('images/arsen-profile.jpeg') }}" alt="Arsen">
      </div>
      <strong>Arsenanda Gilang P.</strong>
      <small style="color: var(--text-muted); display: block; margin-top: 4px;">Telkom University Surabaya</small>
    </div>
  </section>

  <!-- Step 2: About -->
  <section id="about" class="about-section">
    <h2 class="about-title-center">About Me</h2>

    <div class="about-top">
      <div class="about-left">
        <h3>Hi, I'm</h3>
        <div class="big-name">Arsenanda Gilang</div>
      </div>

      <div class="interactive-photo-box" id="aboutPhotoBox" onclick="togglePhotoMode()" title="Klik buat ganti mode foto">
        <img src="{{ asset('images/arsen-about.jpeg') }}" onerror="this.src='{{ asset('images/arsen-profile.jpeg') }}'" alt="Arsenanda Gilang">
        <span class="photo-hint" id="photoHint">Klik foto ✨</span>
      </div>

      <div class="about-right">
        <p>
          Lagi ngebangun pondasi di data analytics, database, dan web development, dengan fokus utama bikin informasi yang tadinya ruwet jadi gampang dibaca dan dipakai ambil keputusan.
        </p>
        <a href="#portofolio" class="btn-outline">Lihat Karya & Sertifikat</a>
      </div>
    </div>

    <div class="edu-exp-grid">
      <div>
        <h3 class="column-heading">Education & Training</h3>

        <div class="timeline-card">
          <span class="timeline-period">2025 – Sekarang</span>
          <h4>Telkom University Surabaya</h4>
          <p>S1 Sistem Informasi • Mahasiswa Semester 3</p>
        </div>

        <div class="timeline-card">
          <span class="timeline-period">2026</span>
          <h4>DTS Komdigi</h4>
          <p>Associate Data Science (Python) & AI Ethics</p>
        </div>
      </div>

      <div>
        <h3 class="column-heading">Focus & Key Roles</h3>

        <div class="timeline-card">
          <span class="timeline-period">Data & Systems</span>
          <h4>Excel, SAP & Data Analysis</h4>
          <p>Pengolahan data, alur proses bisnis ERP, dan penyajian visual yang rapi</p>
        </div>

        <div class="timeline-card">
          <span class="timeline-period">Leadership & Sport</span>
          <h4>Ambassador 26/27, Tryout LAROS 26/27 & Kumite Karate</h4>
          <p>Aktif berorganisasi, kepanitiaan kampus, dan kompetisi karate</p>
        </div>
      </div>
    </div>

    <!-- Skills Section -->
    <div class="skills-box">
      <div class="skills-header">
        <h3>Skills & Tools</h3>
        <span class="badge" style="margin-bottom: 0;">Terus Berkembang ✨</span>
      </div>

      <div class="skills-grid">
        <div class="skill-group">
          <span class="skill-group-title">Data & ERP</span>
          <div class="skill-chips">
            <span class="skill-chip">Microsoft Excel</span>
            <span class="skill-chip">SAP (SCM500)</span>
            <span class="skill-chip">Data Processing</span>
            <span class="skill-chip">Basic Python</span>
          </div>
        </div>

        <div class="skill-group">
          <span class="skill-group-title">Design & Content</span>
          <div class="skill-chips">
            <span class="skill-chip">Canva</span>
            <span class="skill-chip">Visual Layout</span>
            <span class="skill-chip">Content & Edit</span>
            <span class="skill-chip">UI Wireframe</span>
          </div>
        </div>

        <div class="skill-group">
          <span class="skill-group-title">Coordination & Soft Skills</span>
          <div class="skill-chips">
            <span class="skill-chip">Public Speaking / MC</span>
            <span class="skill-chip">Event & Tryout Ops</span>
            <span class="skill-chip">Teamwork</span>
            <span class="skill-chip">Problem Solving</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Step 3: Interactive Folders -->
  <section id="folders" class="folders-section">
    <div class="folders-grid">
      <div class="folder-card" onclick="openPortofolioTab('projects')">
        <div class="folder-back"></div>
        <div class="folder-sheet s1"><span class="sheet-label">Coming Soon</span></div>
        <div class="folder-sheet s2"><span class="sheet-label">Stay Tuned ✨</span></div>
        <div class="folder-front">
          <div>
            <div class="folder-count">Soon</div>
            <div class="folder-label">Projects</div>
          </div>
          <span class="folder-dots">•••</span>
        </div>
      </div>

      <div class="folder-card" onclick="openPortofolioTab('certificates')">
        <div class="folder-back"></div>
        <div class="folder-sheet s1"><span class="sheet-label">DTS Komdigi</span></div>
        <div class="folder-sheet s2"><span class="sheet-label">SAP SCM500</span></div>
        <div class="folder-front">
          <div>
            <div class="folder-count">5+</div>
            <div class="folder-label">Certificates</div>
          </div>
          <span class="folder-dots">•••</span>
        </div>
      </div>

      <div class="folder-card" onclick="openPortofolioTab('activities')">
        <div class="folder-back"></div>
        <div class="folder-sheet s1"><span class="sheet-label">TUS Cup 26</span></div>
        <div class="folder-sheet s2"><span class="sheet-label">PKKMB 26</span></div>
        <div class="folder-front">
          <div>
            <div class="folder-count">3</div>
            <div class="folder-label">Kepanitiaan</div>
          </div>
          <span class="folder-dots">•••</span>
        </div>
      </div>

      <div class="folder-card" onclick="openPortofolioTab('roles')">
        <div class="folder-back"></div>
        <div class="folder-sheet s1"><span class="sheet-label">Ambassador</span></div>
        <div class="folder-sheet s2"><span class="sheet-label">Tryout 26/27</span></div>
        <div class="folder-front">
          <div>
            <div class="folder-count">3</div>
            <div class="folder-label">Organisasi & Role</div>
          </div>
          <span class="folder-dots">•••</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Step 4: Portofolio Tabs -->
  <section id="portofolio" class="portofolio-section">
    <div class="portofolio-header">
      <div class="portofolio-big-title">PORTOFOLIO</div>
      <div class="tab-bar">
        <button class="tab-btn active" data-tab="projects" onclick="switchTab(event, 'projects')">Projects</button>
        <button class="tab-btn" data-tab="certificates" onclick="switchTab(event, 'certificates')">Certificates</button>
        <button class="tab-btn" data-tab="activities" onclick="switchTab(event, 'activities')">Kepanitiaan</button>
        <button class="tab-btn" data-tab="roles" onclick="switchTab(event, 'roles')">Organisasi & Role</button>
      </div>
    </div>

    <!-- TAB 1: PROJECTS -->
    <div id="panel-projects" class="tab-panel active">
      <div class="coming-soon-box">
        <span class="badge">Coming Soon ✨</span>
        <h3>Projects Sedang Disiapkan</h3>
        <p>
          Bagian proyek masih dalam tahap kurasi dan pengembangan. Nanti bakal di-update kalau udah siap dipajang di sini.
        </p>
        <button class="btn-view" onclick="openPreview('Projects — Coming Soon', 'Koleksi proyek sedang disiapkan dan akan segera ditambahkan.', '')">Lihat Info</button>
      </div>
    </div>

    <!-- TAB 2: CERTIFICATES -->
    <div id="panel-certificates" class="tab-panel">
      <div class="cards-grid">
        <div class="item-card">
          <div class="item-thumb">
            <img src="{{ asset('images/certificates/dts-python.png') }}" onerror="this.style.display='none'" alt="DTS Data Science">
            <span class="thumb-pill">DTS Komdigi • 31 JP</span>
          </div>
          <div class="item-body">
            <div>
              <h3>Associate Data Scientist + Python (Nasional)</h3>
              <p>Pelatihan 31 JP mencakup Python, Pandas, Numpy, Scikit-Learn, Data Scraping, Cleansing, & Annotation.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Associate Data Scientist + Python — DTS Komdigi', 'Pelatihan Nasional Digital Talent Scholarship 2026 (31 Jam Pelatihan).', '{{ asset('images/certificates/dts-python.png') }}')">View Certificate</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb">
            <img src="{{ asset('images/certificates/sap-scm500.png') }}" onerror="this.style.display='none'" alt="SAP SCM500">
            <span class="thumb-pill">SAP University Partnership</span>
          </div>
          <div class="item-body">
            <div>
              <h3>SAP Course — SCM500: Business Processes in Procurement</h3>
              <p>Sertifikasi penyelesaian modul proses bisnis pengadaan (procurement) berbasis sistem ERP SAP.</p>
            </div>
            <button class="btn-view" onclick="openPreview('SAP SCM500 — Business Processes in Procurement', 'SAP University Partnership Program • Telkom University & Edugate (2026).', '{{ asset('images/certificates/sap-scm500.png') }}')">View Certificate</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb">
            <img src="{{ asset('images/certificates/dts-ai-ethis.png') }}" onerror="this.style.display='none'" alt="DTS AI Ethics">
            <span class="thumb-pill">DTS Komdigi • 8 JP</span>
          </div>
          <div class="item-body">
            <div>
              <h3>Etika Kecerdasan Artifisial (Basic Digital Skill)</h3>
              <p>Pelatihan 8 JP mengenai kecerdasan artifisial yang dapat dipercaya dan tata kelola etika AI.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Etika Kecerdasan Artifisial — DTS Komdigi', 'Digital Talent Scholarship 2026 • Pusat Pengembangan Literasi Digital (8 JP).', '{{ asset('images/certificates/dts-ai-ethis.png') }}')">View Certificate</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb">
            <img src="{{ asset('images/certificates/karate-kostrad.jpg') }}" onerror="this.style.display='none'" alt="Juara 2 Karate">
            <span class="thumb-pill">Kejuaraan Nasional • 2024</span>
          </div>
          <div class="item-body">
            <div>
              <h3>Juara 2 Kumite Perorangan — Piala Pangdivif 2 Kostrad</h3>
              <p>The 5th Festival Karate Championship dalam rangka HUT Ke-63 Kostrad di GOR Vira Cakti Yudha Malang.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Juara 2 Kumite Perorangan (-40 Kg SMA Putri)', 'The 5th Festival Karate Championship Piala Pangdivif 2 Kostrad Tahun 2024.', '{{ asset('images/certificates/karate-kostrad.jpg') }}')">View Certificate</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb">
            <img src="{{ asset('images/certificates/karate-polije.jpg') }}" onerror="this.style.display='none'" alt="Juara 1 Karate">
            <span class="thumb-pill">Kejuaraan Provinsi • 2023</span>
          </div>
          <div class="item-body">
            <div>
              <h3>Juara 1 Kumite Perorangan — Direktur Cup XI Polije</h3>
              <p>Open Kejuaraan Karate Direktur Cup XI di GOR Perjuangan 45 Politeknik Negeri Jember.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Juara 1 Kumite Perorangan (-48 Kg Junior Putri)', 'Open Kejuaraan Karate Direktur Cup XI Politeknik Negeri Jember (2023).', '{{ asset('images/certificates/karate-polije.jpg') }}')">View Certificate</button>
          </div>
        </div>
      </div>

      <!-- Tombol & Daftar Sertifikat Lainnya -->
      <div class="other-cert-wrap">
        <button class="btn-toggle-cert" id="toggleOtherCertBtn" onclick="toggleOtherCerts()">
          Lihat Sertifikat & Pelatihan Lainnya (13) ▾
        </button>

        <div class="other-cert-list" id="otherCertList">
          <div class="mini-cert-item">
            <div>
              <h4>Public Speaking Training & Briefing Mudik Roadshow 2026</h4>
              <span>Telkom University • Nov 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Public Speaking Training & Briefing Mudik Roadshow 2026', 'Direktorat Marketing & Admission Telkom University (Nov 2025).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Introduction to Cyber Security & Career Awareness</h4>
              <span>Micro Skill DTS Komdigi • 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Introduction to Cyber Security and Career Awareness', 'Micro Skill Digital Talent Scholarship Komdigi (Des 2025).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Ethical Hacker For Dummies</h4>
              <span>Micro Skill DTS Komdigi • 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Ethical Hacker For Dummies', 'Micro Skill Digital Talent Scholarship Komdigi (Des 2025).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Pengenalan Data Science & Pemanfaatannya</h4>
              <span>Micro Skill DTS Komdigi • 2026</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Pengenalan Data Science dan Pemanfaatannya di Berbagai Sektor', 'Micro Skill Digital Talent Scholarship Komdigi (Sep 2026).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Produksi Video Sinematik Berbasis AI</h4>
              <span>Micro Skill DTS Komdigi • 2026</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Produksi Video Sinematik Berbasis AI di Era Digital', 'Micro Skill Digital Talent Scholarship Komdigi (Nov 2026).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Kreasi Animasi 2D dengan Kecerdasan Artifisial</h4>
              <span>Micro Skill DTS Komdigi • 2026</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Kreasi Animasi 2D dengan Kecerdasan Artifisial', 'Micro Skill Digital Talent Scholarship Komdigi (Nov 2026).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Tel-U Career Coach — Entrepreneurship</h4>
              <span>Telkom University • 2026</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Tel-U Career Coach — Entrepreneurship', 'Sertifikat pelatihan kewirausahaan Telkom University (2026).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Technopreneurship & Leadership</h4>
              <span>Telkom University • Mei 2026</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Sertifikat Technopreneurship & Leadership', 'Pengembangan jiwa kepemimpinan dan teknopreneur mahasiswa Telkom University (2026).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Program Belajar Nasional Basic Public Speaking</h4>
              <span>Galeria Potensi Indonesia • Sep 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Basic Public Speaking — Galeria Potensi Indonesia', 'Teknik Berbicara di Depan Umum dengan Menarik & Mudah Dipahami (Sep 2025).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>East Java Student Leader Summit Vol. 2</h4>
              <span>Telkom University Surabaya • Mei 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('East Java Student Leader Summit Vol. 2', 'Peserta konferensi kepemimpinan mahasiswa di Telkom University Surabaya (Mei 2025).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Peserta P2SI Anagata Amerta Festival (Predikat A)</h4>
              <span>HMSI Telkom University Surabaya • 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('P2SI Anagata Amerta Festival 2025 (Predikat A)', 'Regu Pulse • Himpunan Mahasiswa Sistem Informasi Telkom University Surabaya.', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>Webinar Nasional INSIGHT 2025</h4>
              <span>HMSI Telkom University Surabaya • Sep 2025</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('Webinar Nasional INSIGHT 2025', 'Tema: Lead & Empower: Gen Z ada untuk UMKM Unggul (Sep 2025).', '')">Lihat</button>
          </div>

          <div class="mini-cert-item">
            <div>
              <h4>PKKMB 2025 & Penguatan Karakter Mahasiswa</h4>
              <span>Telkom University Surabaya • 2025–2026</span>
            </div>
            <button class="mini-cert-btn" onclick="openPreview('PKKMB 2025 & Modul Karakter Kampus', 'Kelulusan PKKMB, Wawasan Kebangsaan, Self & Relationship Management, Green Campus.', '')">Lihat</button>
          </div>
        </div>
      </div>
    </div>

    <!-- TAB 3: KEPANITIAAN -->
    <div id="panel-activities" class="tab-panel">
      <div class="cards-grid">
        <div class="item-card">
          <div class="item-thumb"><span class="thumb-pill">TUS Cup 26</span></div>
          <div class="item-body">
            <div>
              <h3>Anggota Konmed TUS Cup 26</h3>
              <p>Menangani pertolongan pertama dan dukungan medis selama turnamen olahraga kampus berlangsung.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Anggota Konmed TUS Cup 26', 'Bagian Medis Divisi Konsumsi & Medis TUS Cup 2026.', '{{ asset('images/tus-cup.jpeg') }}')">View Detail</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb"><span class="thumb-pill">PKKMB 26</span></div>
          <div class="item-body">
            <div>
              <h3>Anggota Konmed PKKMB 26</h3>
              <p>Bertanggung jawab atas kesiapsiagaan medis dan penanganan kesehatan peserta orientasi kampus Telkom University Surabaya.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Anggota Konmed PKKMB 26', 'Tim Medis Divisi Konsumsi & Medis PKKMB Telkom University Surabaya 2026.', '{{ asset('images/pkkmb.jpeg') }}')">View Detail</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb"><span class="thumb-pill">Coming Soon</span></div>
          <div class="item-body">
            <div>
              <h3>Anggota PDD Nusantara Festival</h3>
              <p>Coming soon — detail peran dan dokumentasi divisi PDD Nusantara Festival akan segera ditambahkan.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Anggota PDD Nusantara Festival (Coming Soon)', 'Detail kepanitiaan divisi PDD Nusantara Festival sedang disiapkan.', '')">View Detail</button>
          </div>
        </div>
      </div>
    </div>

    <!-- TAB 4: ORGANISASI & ROLE -->
    <div id="panel-roles" class="tab-panel">
      <div class="cards-grid">
        <div class="item-card">
          <div class="item-thumb"><span class="thumb-pill">Ambassador • 26/27</span></div>
          <div class="item-body">
            <div>
              <h3>Ambassador (OpenLibrary Ambassador 26/27)</h3>
              <p>Menggerakkan program literasi kampus, inisiatif pembacaan/curhat lewat buku, serta pemandu acara kegiatan komunitas baca.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Ambassador — OpenLibrary Ambassador 26/27', 'Duta literasi OpenLibrary Telkom University Surabaya periode 2026/2027.', '{{ asset('images/ambasador.jpeg') }}')">View Detail</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb"><span class="thumb-pill">LAROS • 26/27</span></div>
          <div class="item-body">
            <div>
              <h3>Anggota Tryout LAROS 26/27</h3>
              <p>Terlibat dalam koordinasi teknis tryout, panduan pembuatan akun peserta, alur tes online/offline, dan rekap peringkat nilai.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Anggota Tryout LAROS 26/27', 'Koordinasi alur tryout, panduan teknis peserta, dan pengolahan peringkat skor periode 26/27.', '{{ asset('images/laros.jpeg') }}')">View Detail</button>
          </div>
        </div>

        <div class="item-card">
          <div class="item-thumb"><span class="thumb-pill">Coming Soon • 27/28</span></div>
          <div class="item-body">
            <div>
              <h3>Kadiv Tryout LAROS 27/28</h3>
              <p>Coming soon — detail amanah dan program kerja Kepala Divisi Tryout LAROS periode 27/28 akan segera ditambahkan.</p>
            </div>
            <button class="btn-view" onclick="openPreview('Kadiv Tryout LAROS 27/28 (Coming Soon)', 'Informasi peran dan rencana kerja Kadiv Tryout LAROS periode 27/28 segera hadir.', '')">View Detail</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Step 5: Kolase Foto Kepanitiaan -->
  <section class="collage-section">
    <span class="badge">Snapshots ✨</span>
    <h2 class="collage-title">Momen Kepanitiaan & Organisasi</h2>
    <p class="collage-sub">
      Dokumentasi kegiatan di balik layar bareng tim kampus, kepanitiaan, dan organisasi.
    </p>

    <div class="polaroid-grid">
      <div class="polaroid" onclick="openPreview('Ambassador — OpenLibrary 26/27', 'Kegiatan literasi dan kebersamaan bareng tim Ambassador OpenLibrary Telkom University Surabaya.', '{{ asset('images/ambasador.jpeg') }}')">
        <div class="polaroid-img">
          <img src="{{ asset('images/ambasador.jpeg') }}" onerror="this.parentElement.textContent='Foto Ambassador'" alt="Ambassador 26/27">
        </div>
        <div class="polaroid-caption">Ambassador 26/27</div>
      </div>

      <div class="polaroid" onclick="openPreview('Tryout LAROS 26/27', 'Kegiatan koordinasi dan roadshow tryout bersama LAROS Telkom.', '{{ asset('images/laros.jpeg') }}')">
        <div class="polaroid-img">
          <img src="{{ asset('images/laros.jpeg') }}" onerror="this.parentElement.textContent='Foto Tryout LAROS'" alt="Tryout LAROS 26/27">
        </div>
        <div class="polaroid-caption">Tryout LAROS 26/27</div>
      </div>

      <div class="polaroid" onclick="openPreview('Konmed TUS Cup 26', 'Dokumentasi tim medis saat turnamen olahraga TUS Cup 26 berlangsung.', '{{ asset('images/tus-cup.jpeg') }}')">
        <div class="polaroid-img">
          <img src="{{ asset('images/tus-cup.jpeg') }}" onerror="this.parentElement.textContent='Foto TUS Cup 26'" alt="TUS Cup 26">
        </div>
        <div class="polaroid-caption">TUS Cup 26 • Konmed</div>
      </div>

      <div class="polaroid" onclick="openPreview('Konmed PKKMB 26', 'Dokumentasi bertugas di divisi Konmed PKKMB Telkom University Surabaya.', '{{ asset('images/pkkmb.jpeg') }}')">
        <div class="polaroid-img">
          <img src="{{ asset('images/pkkmb.jpeg') }}" onerror="this.parentElement.textContent='Foto PKKMB 26'" alt="PKKMB 26">
        </div>
        <div class="polaroid-caption">PKKMB 26 • Konmed</div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="contact-section">
    <div class="contact-box">
      <span class="badge">Kontak</span>
      <h2>Yuk, Terhubung!</h2>
      <p>
        Terbuka untuk peluang magang, proyek kolaborasi, atau diskusi seputar analisis data, pengembangan web, dan desain.
      </p>
      <div class="social-links">
        <a href="mailto:nanda.gilang.permatasari@gmail.com" class="btn-primary">Email</a>
        <a href="https://www.instagram.com/arsenandaa_/" target="_blank" class="btn-outline">Instagram</a>
        <a href="https://github.com/arsenboo" target="_blank" class="btn-outline">GitHub</a>
      </div>
    </div>
  </section>

  <footer>
    Arsenanda Gilang Permatasari • Portofolio 2026
  </footer>

  <!-- Modal Popup Preview -->
  <div id="previewModal" class="preview-modal" onclick="closePreview(event)">
    <div class="modal-card">
      <button class="modal-close" onclick="closeModalDirect()">✕</button>
      <img id="modalImg" src="" alt="Preview" style="display:none;">
      <h3 id="modalTitle" style="margin-bottom: 0.5rem; color: var(--pink-dark);"></h3>
      <p id="modalDesc" style="color: var(--text-muted); font-size: 0.92rem;"></p>
    </div>
  </div>

  <script>
    let photoStep = 0;
    const modes = ['', 'mode-pink', 'mode-soft'];
    const hints = ['Klik foto ✨', 'Pink vibe 🩷', 'Soft mode 🌸'];

    function togglePhotoMode() {
      const box = document.getElementById('aboutPhotoBox');
      const hint = document.getElementById('photoHint');
      modes.forEach(m => m && box.classList.remove(m));
      photoStep = (photoStep + 1) % modes.length;
      if (modes[photoStep]) {
        box.classList.add(modes[photoStep]);
      }
      hint.textContent = hints[photoStep];
    }

    function switchTab(e, tabName) {
      document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.remove('active'));
      e.currentTarget.classList.add('active');
      document.getElementById('panel-' + tabName).classList.add('active');
    }

    function openPortofolioTab(tabName) {
      document.getElementById('portofolio').scrollIntoView({ behavior: 'smooth' });
      document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.toggle('active', btn.dataset.tab === tabName);
      });
      document.querySelectorAll('.tab-panel').forEach(panel => {
        panel.classList.toggle('active', panel.id === 'panel-' + tabName);
      });
    }

    function openPreview(title, desc, imgSrc) {
      const modal = document.getElementById('previewModal');
      const img = document.getElementById('modalImg');
      document.getElementById('modalTitle').textContent = title;
      document.getElementById('modalDesc').textContent = desc;
      if (imgSrc) {
        img.src = imgSrc;
        img.style.display = 'block';
      } else {
        img.style.display = 'none';
      }
      modal.classList.add('open');
    }

    function closeModalDirect() {
      document.getElementById('previewModal').classList.remove('open');
    }

    function closePreview(e) {
      if (e.target.id === 'previewModal') {
        e.currentTarget.classList.remove('open');
      }
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeModalDirect();
      }
    });

    function toggleOtherCerts() {
      const list = document.getElementById('otherCertList');
      const btn = document.getElementById('toggleOtherCertBtn');
      const isOpen = list.classList.toggle('show');
      btn.textContent = isOpen
        ? 'Sembunyikan Sertifikat Lainnya ▴'
        : 'Lihat Sertifikat & Pelatihan Lainnya (13) ▾';
    }

    // Update active navbar link on scroll
    const navLinks = document.querySelectorAll('nav a');
    const sections = ['#home', '#about', '#portofolio', '#contact']
      .map(id => document.querySelector(id))
      .filter(Boolean);

    window.addEventListener('scroll', () => {
      const scrollPos = window.scrollY + 180;
      let currentId = '#home';

      sections.forEach(sec => {
        if (sec.offsetTop <= scrollPos) {
          currentId = '#' + sec.id;
        }
      });

      navLinks.forEach(link => {
        link.classList.toggle('active', link.getAttribute('href') === currentId);
      });
    });
  </script>
</body>
</html>