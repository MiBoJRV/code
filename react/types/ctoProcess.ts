import { ReactNode } from 'react';

export type ProcessType = {
  id: string | number;
  title: string;
  description: ReactNode;
  className: string;
};

export type CtoProcessType = {
  processes: ProcessType[];
};
