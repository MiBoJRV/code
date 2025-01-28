import { ReactNode } from 'react';

export type CallToActionType = {
  id: string | number;
  title: ReactNode;
  description: ReactNode;
  buttonText?: string;
  className?: string;
  buttonClassName?: string;
  icon?: ReactNode;
  button?: ReactNode;
};
