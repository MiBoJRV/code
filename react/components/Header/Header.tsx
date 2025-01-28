import React from 'react';
import cn from 'classnames';
import { useHeader } from './useHeader';
import { useModal } from 'src/hooks';
import { PageContainer, Button } from 'src/ui-kit';
import { Logo, Nav, Modal, ContactForm } from 'src/components';
import { BurgerIcon, PenIcon, CloseIcon } from 'src/assets/icons';

type HeaderProps = {
  className?: string;
};

export const Header: React.FC<HeaderProps> = ({ className }): JSX.Element => {
  const { isModalOpen, toggleModal } = useModal();
  const {
    isMobileMenu,
    isMenuVisible,
    expandedMenuItem,
    toggleMobileMenu,
    setExpandedMenuItem,
  } = useHeader();

  return (
    <header>
      <div
        className={cn(
          `min-w-full fixed z-50 ${
            expandedMenuItem
              ? 'bg-header-gradient lg:bg-blue lg:bg-none'
              : 'bg-header-gradient'
          }`,
          className
        )}
      >
        <PageContainer>
          <div
            className={`flex justify-between items-center py-6 lg:py-7 ${
              isMenuVisible ? 'lg:justify-start' : 'lg:justify-between'
            }`}
          >
            <Logo />
            <button
              type="button"
              onClick={toggleMobileMenu}
              className="lg:hidden"
            >
              {isMobileMenu ? <CloseIcon /> : <BurgerIcon />}
            </button>
            <Nav
              {...{ expandedMenuItem, setExpandedMenuItem }}
              className={`hidden grow mr-8 2xl:mr-[65px] ${
                isMenuVisible ? 'lg:block ' : 'lg:hidden'
              }`}
            />
            <Button
              title={`Let's Talk`}
              icon={<PenIcon />}
              iconPosition="right"
              className="hidden lg:flex"
              onClick={toggleModal}
            />
          </div>
        </PageContainer>
      </div>
      {isMobileMenu && (
        <div className="fixed top-0 left-0 w-full min-h-full max-h-full overflow-y-auto pt-[78px] pb-14 z-20 bg-background-menu shadow-brand lg:hidden">
          <Nav {...{ expandedMenuItem, setExpandedMenuItem }} />
          <Button
            title={`Let's Talk`}
            icon={<PenIcon width={17} height={17} />}
            btnKind="lg"
            iconPosition="right"
            className="ml-auto mr-[35px] mt-10"
            onClick={toggleModal}
          />
        </div>
      )}
      <Modal isOpen={isModalOpen}>
        <ContactForm onClose={toggleModal} />
      </Modal>
    </header>
  );
};
