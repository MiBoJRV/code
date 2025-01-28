import { ReactNode } from 'react';

export type ObstacleFeatureType = {
  id: number | string;
  icon: ReactNode;
  text: ReactNode;
};

export type ObstaclesType = {
  features: ObstacleFeatureType[];
};
