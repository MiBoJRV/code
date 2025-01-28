import { ReactNode } from 'react';

export type MenuItemType = {
  id: string | number;
  title: string;
  href?: string;
  subMenuItems?: NavLinkType[];
  isExpandable?: boolean;
};

export type NavLinkType = {
  id: string | number;
  title?: string;
  href?: string;
  links?: LinkType[];
  heading?: string;
  description?: string;
  icon?: ReactNode;
};

export type LinkType = {
  id: number | string;
  title?: string;
  href?: string;
};

export type FooterConfigType = {
  id: number | string;
  title: string;
  footerLinks: NavLinkType[];
  className?: string;
};
