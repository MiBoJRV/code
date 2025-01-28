import { MenuItemType } from 'src/types';
import { ROUTES } from 'src/constants';
import {
  SoftwareDevIcon,
  ProductDevIcon,
  AppModernizationIcon,
  TeamworkIcon,
} from 'src/assets/icons';

const iconCommonClasses =
  'stroke-blue-warm group-hover:stroke-blue-light transition-all';

const SERVICES_SUB_MENU_ITEMS = [
  {
    id: 'cto_as_a_service',
    title: 'CTO as a Service',
    href: ROUTES.CTO_SERVICE,
    heading: 'Address challenges',
    description: 'Get expert technical leadership and guidance',
    icon: (
      <SoftwareDevIcon className={`w-7 h-6 mr-[14px] ${iconCommonClasses}`} />
    ),
  },
  {
    id: 'product_development',
    title: 'Product development',
    href: ROUTES.SAAS_SERVICE,
    heading: 'Build new products',
    description: 'Make your idea into a working product',
    icon: (
      <ProductDevIcon className={`w-7 h-6 mr-[14px] ${iconCommonClasses}`} />
    ),
    links: [
      {
        id: 11,
        title: 'Product discovery',
        href: '',
      },
      { id: 12, title: 'MVP development', href: '' },
      { id: 13, title: 'SaaS development', href: ROUTES.SAAS_SERVICE },
      { id: 14, title: 'Web development', href: '' },
      { id: 15, title: 'Cross-platform app development', href: '' },
    ],
  },
  {
    id: 'application_modernization',
    title: 'Application modernization',
    href: '',
    heading: 'Enhance existing software',
    description: 'Modernize legacy software so it can meet your business needs',
    icon: (
      <AppModernizationIcon
        className={`w-7 h-6 mr-[14px] ${iconCommonClasses}`}
      />
    ),
    links: [
      { id: 31, title: 'Cloud migration', href: '' },
      { id: 32, title: 'Test automation', href: '' },
      { id: 33, title: 'DevOps', href: '' },
    ],
  },
  {
    id: 'team_augmentation',
    title: 'Team augmentation',
    href: '',
    heading: 'Scale your team',
    description: 'Ramp up your team with the needed software developers',
    icon: <TeamworkIcon className={`w-7 h-6 mr-[14px] ${iconCommonClasses}`} />,
    links: [
      { id: 21, title: 'Hire Node.js developers', href: '' },
      { id: 22, title: 'Hire React developers', href: '' },
      { id: 23, title: 'Hire Next.js developers', href: '' },
      { id: 24, title: 'Hire Angular developers', href: '' },
      { id: 25, title: 'Hire Nest developers', href: '' },
    ],
  },
];

export const NAV_LINKS_CONFIG: MenuItemType[] = [
  { id: 'work', title: 'Work', href: ROUTES.WORK },
  {
    id: 'services',
    title: 'Services',
    isExpandable: true,
    subMenuItems: SERVICES_SUB_MENU_ITEMS,
  },
  {
    id: 'expertise',
    title: 'Expertise',
    isExpandable: true,
    subMenuItems: SERVICES_SUB_MENU_ITEMS,
  },
  { id: 'company', title: 'Company', href: ROUTES.COMPANY },
  {
    id: 'resources',
    title: 'Resources',
    isExpandable: true,
    subMenuItems: SERVICES_SUB_MENU_ITEMS,
  },
];
