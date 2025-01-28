import React, { ReactNode } from 'react';

interface ModalProps {
  isOpen: boolean;
  children?: ReactNode;
}

export const Modal: React.FC<ModalProps> = ({ isOpen, children }) => {
  return isOpen ? (
    <div className="max-w-screen-1xl m-auto overflow-scroll px-[20px] w-screen h-screen fixed top-0 left-0 z-50 bg-background page-background-spots flex justify-center items-center lg:px-[30px] xl:px-[70px]">
      {children}
    </div>
  ) : null;
};
