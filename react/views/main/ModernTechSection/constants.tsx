import { TechnologyType } from 'src/types';
import { AIIcon, RPAIcon, Web3Icon, BlockchainIcon } from 'src/assets/icons';

export const TECHNOLOGY: TechnologyType[] = [
  {
    id: 1,
    text: 'Automate tasks and make smarter decisions with ',
    emphasizedText: 'AI and machine learning',
    icon: <AIIcon />,
  },
  {
    id: 2,
    text: 'Secure your transactions and data with ',
    emphasizedText: 'blockchain',
    icon: <BlockchainIcon />,
  },
  {
    id: 3,
    text: 'Streamline your operations with  ',
    emphasizedText: 'robotic process automation (RPA)',
    icon: <RPAIcon />,
  },
  {
    id: 4,
    text: 'Innovate your offerings with emerging  ',
    emphasizedText: 'Web3 technology',
    icon: <Web3Icon />,
  },
];
