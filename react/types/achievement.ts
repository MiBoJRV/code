import { ReactNode } from 'react';

export type AchievementType = {
  id: number;
  title: string;
  icon?: ReactNode;
  text?: string;
  className?: string;
};
