import { ReactNode } from 'react';

export type OptionTechAndBusinessType = {
  id: string;
  title: string;
  description: ReactNode;
  icon: ReactNode;
};

export type TechAndBusinessType = {
  id: string;
  title: string;
  description: string;
  options: OptionTechAndBusinessType[];
};
