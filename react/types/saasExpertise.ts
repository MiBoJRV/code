import { ReactNode } from 'react';

export type SaasFeatureType = {
  id: number | string;
  title: string;
};

export type SaasLogoType = {
  id: number | string;
  icon: ReactNode;
  className?: string;
};

export type SaasExpertiseType = {
  id: number | string;
  title: string;
  description: string;
  features: SaasFeatureType[];
  logos: SaasLogoType[];
};
