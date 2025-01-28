import softwareSuggestImg from 'src/assets/images/soft_suggest_img.png?w=768;1024;2000&format=webp';
import clutchImg from 'src/assets/images/clutch_img.svg';
import upworkImg from 'src/assets/images/upwork_img.svg';

import { formatImgResponse } from 'src/helpers';

export const MORE_REVIEWS_CONFIG = [
  {
    id: 'clutch',
    image: formatImgResponse(clutchImg).src,
    link: '#',
    alt: 'Clutch logo',
    className: 'w-[74px] h-10 lg:w-28 lg:h-16',
  },
  {
    id: 'upwork',
    image: formatImgResponse(upworkImg).src,
    link: '#',
    alt: 'Upwork logo',
    className: 'w-[100px] h-12 lg:w-40 lg:h-16',
  },
  {
    id: 'soft_suggest',
    image: formatImgResponse(softwareSuggestImg).src,
    link: '#',
    alt: 'Software suggest logo',
    className: 'w-20 h-[75px] lg:w-32 lg:h-[120px]',
  },
];
