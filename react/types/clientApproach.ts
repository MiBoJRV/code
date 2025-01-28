import { ReactNode } from 'react';

export type ApproachType = {
  id: string;
  text?: string;
  icon?: ReactNode;
};

export type ClientApproachType = {
  id: string;
  description: string;
  title: string;
  approaches: ApproachType[];
};
