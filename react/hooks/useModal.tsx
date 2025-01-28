import { useEffect, useState } from 'react';

type useModalType = {
  isModalOpen: boolean;
  toggleModal: () => void;
};

export const useModal = (): useModalType => {
  const [isModalOpen, setIsModalOpen] = useState<boolean>(false);
  useEffect(() => {
    document.body.style.overflow = isModalOpen ? 'hidden' : 'unset';
  }, [isModalOpen]);

  const toggleModal = () => {
    setIsModalOpen((prevState) => !prevState);
  };

  return { isModalOpen, toggleModal };
};
