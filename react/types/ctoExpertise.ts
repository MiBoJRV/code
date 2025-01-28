import { ReactNode } from 'react';

export type CtoExpertiseFeatureType = {
  id: number | string;
  text: ReactNode;
};

export type CtoExpertiseType = {
  id: string | number;
  title: ReactNode;
  description: string;
  buttonText: string;
  buttonClassName: string;
  features: CtoExpertiseFeatureType[];
};
