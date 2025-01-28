import bannerOneImage from 'src/assets/images/main_banner_dashboard_img.png?w=768;1024;2000&format=webp';
import bannerTwoImage from 'src/assets/images/main_banner_2nd_img.png?w=768;1024;2000&format=webp';
import bannerThreeImage from 'src/assets/images/main_banner_3rd_img.png?w=768;1024;2000&format=webp';
import bannerFourImage from 'src/assets/images/main_banner_4th_img.png?w=768;1024;2000&format=webp';
import bannerFiveImage from 'src/assets/images/main_banner_5th_img.png?w=768;1024;2000&format=webp';
import { formatImgResponse } from 'src/helpers';
import { ImageConfigType } from 'src/types';

export const MAIN_BANNER_IMGS_CONFIG: ImageConfigType[] = [
  {
    id: 3,
    image: formatImgResponse(bannerThreeImage),
    alt: 'Commerce dashboard overview',
    className:
      'absolute w-[69%] bottom-[46%] left-[12%] drop-shadow-blue-30-2 z-[-3] matrix lg:drop-shadow-blue-50',
  },
  {
    id: 1,
    image: formatImgResponse(bannerOneImage),
    alt: 'Dashboard overview',
    className:
      'absolute w-[68%] bottom-[30%] left-[4%] drop-shadow-blue-15 z-[-5] matrix lg:drop-shadow-blue-30',
  },
  {
    id: 2,
    image: formatImgResponse(bannerTwoImage),
    alt: 'Monthly earnings graph',
    className:
      'absolute w-[25%] bottom-[25%] left-[54%] drop-shadow-blue-15 z-[-4] matrix lg:drop-shadow-blue-50',
  },
  {
    id: 4,
    image: formatImgResponse(bannerFourImage),
    alt: 'Analytics graph',
    className:
      'absolute w-[40%] top-[22%] left-[58%] drop-shadow-blue-30-2 z-[-2] matrix lg:drop-shadow-blue-50',
  },
  {
    id: 5,
    image: formatImgResponse(bannerFiveImage),
    alt: 'Crypto wallet graph',
    className:
      'absolute w-[38%] top-[12%] left-[48%] drop-shadow-blue-30-2 z-[-1] matrix l:drop-shadow-blue-50',
  },
];
