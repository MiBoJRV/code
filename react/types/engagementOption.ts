import { ReactNode } from 'react';

export type EngagementOptionType = {
  id: number | string;
  icon: ReactNode;
  title: string;
  text: ReactNode;
};

export type EngagementOptionServiceType = {
  title: ReactNode;
  description: string;
  services_one: EngagementOptionType[];
  services_two: EngagementOptionType[];
};
