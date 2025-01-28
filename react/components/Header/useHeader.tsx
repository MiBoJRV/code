import { useState, useEffect } from 'react';

export const useHeader = () => {
  const [isMobileMenu, setIsMobileMenu] = useState<boolean>(false);
  const [isMenuVisible, setIsMenuVisible] = useState<boolean>(true);
  const [lastScrollTop, setLastScrollTop] = useState<number>(0);
  const [expandedMenuItem, setExpandedMenuItem] = useState<
    string | number | null
  >(null);

  const toggleMobileMenu = () => {
    setIsMobileMenu((prev) => !prev);
  };

  useEffect(() => {
    document.body.style.overflow = isMobileMenu ? 'hidden' : 'unset';
  }, [isMobileMenu]);

  useEffect(() => {
    const handleScroll = () => {
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;
      if (scrollTop > lastScrollTop) {
        setIsMenuVisible(false);
      } else {
        setIsMenuVisible(true);
      }
      setLastScrollTop(scrollTop);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, [lastScrollTop]);

  return {
    isMobileMenu,
    isMenuVisible,
    expandedMenuItem,
    toggleMobileMenu,
    setExpandedMenuItem,
  };
};
