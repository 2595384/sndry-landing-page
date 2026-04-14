import React, { useState, useEffect, useRef } from 'react';
import { useLanguage } from './LanguageContext';
import sundryLogoWhite from './assets/sndry-logo-w.png';
import Policies from './Policies.jsx';
import Privacy from './Privacy.jsx';

function App() {
  const { language, toggleLanguage, t } = useLanguage();
  const [activeItem, setActiveItem] = useState(null);
  const [activePage, setActivePage] = useState(null); // 'policies' or 'privacy'
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const [isLoaded, setIsLoaded] = useState(false);
  const cursorRef = useRef(null);

  const themes = {
    default: { bg: '#2FA4D7', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    intro: { bg: '#DE3D3A', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    commitment: { bg: '#27AE60', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    smallTeams: { bg: '#2980B9', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    privacy: { bg: '#8E44AD', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    sme: { bg: '#CA8E0B', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    remoteWork: { bg: '#D81B60', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    hoursNotEqual: { bg: '#16A085', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    repetition: { bg: '#C0392B', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    meetingsNotFree: { bg: '#E67E22', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    marginalThinking: { bg: '#9B59B6', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    stayups: { bg: '#C06C84', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    globalVision: { bg: '#E84393', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    miscommunication: { bg: '#AF7AC5', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    easyTrap: { bg: '#FD79A8', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    notFamily: { bg: '#00BCD4', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
    vision2030: { bg: '#006C35', textPrimary: '#ffffff', textSecondary: 'rgba(255, 255, 255, 0.6)', textHover: '#ffffff' },
  };

  useEffect(() => {
    const currentTheme = themes[activeItem] || themes.default;
    document.documentElement.style.setProperty('--bg-color', currentTheme.bg);
    document.documentElement.style.setProperty('--text-primary', currentTheme.textPrimary);
    document.documentElement.style.setProperty('--text-secondary', currentTheme.textSecondary);
    document.documentElement.style.setProperty('--text-hover', currentTheme.textHover);

    if (activeItem) {
      setTimeout(() => {
        const activeEl = document.querySelector('.list-item.active');
        if (activeEl) {
          activeEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      }, 150);
    }
  }, [activeItem]);

  const themeKeys = [
    'intro', 'commitment', 'smallTeams', 'privacy', 'vision2030', 'sme', 
    'remoteWork', 'hoursNotEqual', 'repetition', 'meetingsNotFree', 
    'marginalThinking', 'stayups', 'globalVision', 'miscommunication', 
    'easyTrap', 'notFamily', 'digitalCraft'
  ];

  const handleNextItem = () => {
    setActivePage(null);
    if (!activeItem) {
      setActiveItem('intro');
      return;
    }
    const currentIndex = themeKeys.indexOf(activeItem);
    const nextIndex = (currentIndex + 1) % themeKeys.length;
    setActiveItem(themeKeys[nextIndex]);
  };

  const handlePrevItem = () => {
    setActivePage(null);
    if (!activeItem) return;
    const currentIndex = themeKeys.indexOf(activeItem);
    if (currentIndex <= 0) return;
    const prevIndex = (currentIndex - 1) % themeKeys.length;
    setActiveItem(themeKeys[prevIndex]);
  };

  useEffect(() => {
    const handleKeyDown = (e) => {
      if (e.key === 'ArrowDown' || e.key === 'ArrowLeft') {
        e.preventDefault();
        handleNextItem();
      } else if (e.key === 'ArrowUp' || e.key === 'ArrowRight') {
        e.preventDefault();
        handlePrevItem();
      }
    };
    window.addEventListener('keydown', handleKeyDown);
    return () => window.removeEventListener('keydown', handleKeyDown);
  }, [activeItem]);

  useEffect(() => {
    const loadTimer = setTimeout(() => setIsLoaded(true), 1200);
    return () => clearTimeout(loadTimer);
  }, []);

  useEffect(() => {
    const handleMouseMove = (e) => {
      if (cursorRef.current) {
        cursorRef.current.style.transform = `translate(${e.clientX}px, ${e.clientY}px) translate(-50%, -50%)`;
      }
    };
    window.addEventListener('mousemove', handleMouseMove);
    return () => window.removeEventListener('mousemove', handleMouseMove);
  }, []);

  const progress = activeItem ? ((themeKeys.indexOf(activeItem) + 1) / themeKeys.length) * 100 : 0;

  return (
    <div className="app-wrapper">
      {/* Custom Cursor */}
      <div ref={cursorRef} className="custom-cursor"></div>

      {/* Progress Bar */}
      <div className="progress-container">
        <div className="progress-bar" style={{ height: `${progress}%` }}></div>
      </div>

      {/* Noise Overlay */}
      <div className="noise-overlay"></div>

      {/* Splash Screen */}
      <div className={`splash-screen ${isLoaded ? 'hidden' : ''}`}>
        <img src={sundryLogoWhite} alt="SNDRY" />
      </div>

      {/* Unified Absolute Header */}
      <header className={`fixed-header ${isMobileMenuOpen ? 'menu-open' : ''}`}>
        
        {/* Columb 1: Links & Menu Button */}
        <div className="header-left-col">
          <button className="mobile-menu-btn" onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}>
            {isMobileMenuOpen ? (language === 'ar' ? 'إغلاق' : 'Close') : (language === 'ar' ? 'القائمة' : 'Menu')}
          </button>
          
          <div className={`nav-links ${isMobileMenuOpen ? 'mobile-visible' : ''}`}>
            <button 
              onClick={() => { setActiveItem('intro'); setActivePage(null); setIsMobileMenuOpen(false); }} 
              className={`nav-link-btn ${activeItem === 'intro' ? 'active-nav' : ''}`}
            >
              {language === 'ar' ? 'عن سندري' : 'About SNDRY'}
            </button>
            <a onClick={() => setIsMobileMenuOpen(false)} href="https://erp.sndry.net" target="_blank" rel="noopener noreferrer">SaaS ERP</a>
            <a onClick={() => setIsMobileMenuOpen(false)} href="https://pos.sndry.net" target="_blank" rel="noopener noreferrer">POS</a>
            <a onClick={() => setIsMobileMenuOpen(false)} href="https://sami.sndry.net" target="_blank" rel="noopener noreferrer">SAMI AI</a>
            <a onClick={() => setIsMobileMenuOpen(false)} href="https://flow.sndry.net" target="_blank" rel="noopener noreferrer">Flow</a>
          </div>
        </div>

        {/* Column 2: Globe Button */}
        <div className="header-center-col">
          <button onClick={toggleLanguage} className="header-lang-btn" title={language === 'ar' ? 'English' : 'عربي'}>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="globe-icon">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
              <path d="M2 12h20"/>
            </svg>
          </button>
        </div>

        {/* Column 3: Logo */}
        <div className="safe-logo">
          <a href="/" title={language === 'ar' ? 'الرئيسية' : 'Home'}>
            <img 
              src={sundryLogoWhite} 
              alt="Sundry Group" 
            />
          </a>
        </div>
      </header>

      {activePage === 'policies' ? (
        <main className="content-list policies-open" style={{ overflowY: 'auto' }}>
          <Policies onClose={() => setActivePage(null)} dir={language === 'ar' ? 'rtl' : 'ltr'} lang={language} />
        </main>
      ) : activePage === 'privacy' ? (
        <main className="content-list policies-open" style={{ overflowY: 'auto' }}>
          <Privacy onClose={() => setActivePage(null)} dir={language === 'ar' ? 'rtl' : 'ltr'} lang={language} />
        </main>
      ) : (
      <main className={`content-list ${activeItem ? 'has-active' : ''}`}>
        {/* Intro */}
        <div className={`list-item ${activeItem === 'intro' ? 'active' : ''}`} onClick={() => setActiveItem(activeItem === 'intro' ? null : 'intro')}>
          <h1 className="list-item-header">
            <span className="index-num">00.</span>
            <span className="title-text">{t.startHere}</span>
          </h1>
          <div className="item-details">
            <p className="item-desc">{t.heroTitle} {t.heroSubtitle}</p>
          </div>
        </div>

        {themeKeys.filter(k => k !== 'intro').map((key, index) => {
          const numText = (index + 1).toString().padStart(2, '0') + '.';
          return (
            <div key={key} className={`list-item ${activeItem === key ? 'active' : ''}`} onClick={() => setActiveItem(activeItem === key ? null : key)}>
              <h2 className="list-item-header">
                <span className="index-num">{numText}</span>
                <span className="title-text">{t.products[key]?.name}</span>
              </h2>
              <div className="item-details">
                <p className="item-desc">{t.products[key]?.desc}</p>
              </div>
            </div>
          );
        })}
      </main>
      )}

      <footer className="bottom-nav">
        <div className="bottom-nav-left">
          <span dir="ltr">SNDRY GROUP 2026 ©</span>
          <button onClick={() => setActivePage('privacy')} className="nav-link-bottom">
            {language === 'ar' ? 'سياسة الخصوصية' : 'Privacy Policy'}
          </button>
          <button onClick={() => setActivePage('policies')} className="nav-link-bottom">
            {language === 'ar' ? 'شروط الخدمة' : 'Terms of Service'}
          </button>
        </div>
        <div className="bottom-nav-right">
          <button className="cycle-btn" onClick={handleNextItem} aria-label="Next Item">
            <svg width="45" height="45" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="5" y="2" width="14" height="20" rx="7" fill="#ffffff" />
              <path d="M12 6v4" stroke="#000000" strokeWidth="2" strokeLinecap="round" />
            </svg>
          </button>
        </div>
      </footer>
    </div>
  );
}

export default App;
