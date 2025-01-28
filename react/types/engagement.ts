import { ReactNode } from 'react';

export type EngagementType = {
  id: number | string;
  icon: ReactNode;
  title: string;
  text: string;
};

export type EngagementServiceType = {
  title: string;
  description: ReactNode;
  services: EngagementType[];
  buttonText: string;
  buttonClassName: string;
};
