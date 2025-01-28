import { AchievementType } from 'src/types';
import { YearsIcon, CoinsIcon, FoldersIcon, HandsIcon } from 'src/assets/icons';

export const ACHIEVEMENTS: AchievementType[] = [
  {
    id: 1,
    title: 'Founded \nin 2010',
    icon: <YearsIcon />,
    text: 'More than a decade of experience',
    className: 'w-[78px] h-[61px] xs:w-[50px] xs:h-10 lg:w-[84px] lg:h-[66px]',
  },
  {
    id: 2,
    title: '$29M \n+raised',
    icon: <CoinsIcon />,
    text: 'Our solutions help our clients get funded',
    className: 'w-12 h-16 xs:w-8 xs:h-11 lg:w-[53px] lg:h-[71px]',
  },
  {
    id: 3,
    title: '100+ \nprojects',
    icon: <FoldersIcon />,
    text: 'We deliver successful solutions',
    className: 'w-[67px] h-[59px] xs:w-12 xs:h-[38px] lg:w-[72px] lg:h-16',
  },
  {
    id: 4,
    title: 'Up to \n5 years',
    icon: <HandsIcon />,
    text: 'Average client engagement',
    className: 'w-[68px] h-14 xs:w-11 xs:h-9 lg:w-[73px] lg:h-[61px]',
  },
];
