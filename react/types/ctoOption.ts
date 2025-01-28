import { ReactNode } from 'react';

export type OptionType = {
  id: string;
  title: string;
  description: ReactNode;
  icon?: ReactNode;
};

export type CtoOptionType = {
  id: string;
  title: ReactNode;
  options: OptionType[];
};
