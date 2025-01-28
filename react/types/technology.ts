import { ReactNode } from 'react';

export type TechnologyType = {
  id: number;
  text?: string;
  emphasizedText?: string;
  icon?: ReactNode;
  className?: string;
};
