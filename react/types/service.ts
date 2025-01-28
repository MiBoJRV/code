import { ReactNode } from 'react';

export type ServiceFeatureType = {
  id: number | string;
  icon: ReactNode;
  text: ReactNode;
};

export type ServiceType = {
  title: string;
  description: ReactNode;
  features: ServiceFeatureType[];
  link: string;
};
