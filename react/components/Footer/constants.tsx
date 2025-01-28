import { FooterConfigType, NavLinkType } from 'src/types';

export const WHATWEDO_LINKS: NavLinkType[] = [
  {
    id: 1,
    title: 'Product development',
    href: '',
    links: [
      {
        id: 11,
        title: 'Product discovery',
        href: '',
      },
      { id: 12, title: 'MVP development', href: '' },
      { id: 13, title: 'SaaS development', href: '' },
      { id: 14, title: 'Web development', href: '' },
      { id: 15, title: 'Cross-platform app development', href: '' },
    ],
  },
  {
    id: 2,
    title: 'Team augmentation',
    href: '',
    links: [
      { id: 21, title: 'Hire Node.js developers', href: '' },
      { id: 22, title: 'Hire React developers', href: '' },
      { id: 23, title: 'Hire Next.js developers', href: '' },
      { id: 24, title: 'Hire Angular developers', href: '' },
      { id: 25, title: 'Hire Nest developers', href: '' },
    ],
  },
  {
    id: 3,
    title: 'Application modernization',
    href: '',
    links: [
      { id: 31, title: 'Cloud migration', href: '' },
      { id: 32, title: 'Test automation', href: '' },
      { id: 33, title: 'DevOps', href: '' },
    ],
  },
  {
    id: 4,
    title: 'CTO as a Service',
    href: '',
    links: [],
  },
];

export const EXPERTISE_LINKS: NavLinkType[] = [
  {
    id: 5,
    title: 'RPA',
    href: '',
    links: [],
  },
  {
    id: 6,
    title: 'Blockchain',
    href: '',
    links: [],
  },
  {
    id: 7,
    title: 'GPT-3',
    href: '',
    links: [],
  },
  {
    id: 8,
    title: 'Web3',
    href: '',
    links: [],
  },
];

export const RESOURCES_LINKS: NavLinkType[] = [
  {
    id: 9,
    title: 'Blog',
    href: '',
    links: [],
  },
  {
    id: 10,
    title: 'News',
    href: '',
    links: [],
  },
  {
    id: 11,
    title: 'Employee spotlight',
    href: '',
    links: [],
  },
];

export const COMPANY_LINKS: NavLinkType[] = [
  {
    id: 12,
    title: 'Client success',
    href: '',
    links: [],
  },
  {
    id: 13,
    title: 'Reviews',
    href: '',
    links: [],
  },
  {
    id: 14,
    title: 'About',
    href: '',
    links: [],
  },
  {
    id: 15,
    title: 'Carriers',
    href: '',
    links: [],
  },
  {
    id: 16,
    title: 'Contact us',
    href: '',
    links: [],
  },
];

export const FOOTER_BLOCKS_CONFIG: FooterConfigType[] = [
  {
    id: 'expertice',
    title: 'Expertise',
    className: 'lg:w-1/3',
    footerLinks: EXPERTISE_LINKS,
  },
  {
    id: 'resources',
    title: 'Resources',
    className: 'lg:w-[35%]',
    footerLinks: RESOURCES_LINKS,
  },
  {
    id: 'company',
    title: 'Company',
    className: 'lg:w-1/3',
    footerLinks: COMPANY_LINKS,
  },
];
