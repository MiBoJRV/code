import { SaasBannerType } from 'src/types';
import { formatImgResponse } from 'src/helpers';
import bannerOneImage from 'src/assets/images/saasMainBunner_1.png?w=768;1024;2000&format=webp';
import bannerTwoImage from 'src/assets/images/saasMainBunner_2.png?w=768;1024;2000&format=webp';
import bannerThreeImage from 'src/assets/images/saasMainBunner_3.png?w=768;1024;2000&format=webp';
import bannerFourImage from 'src/assets/images/saasMainBunner_4.png?w=768;1024;2000&format=webp';

export const SAAS_MAIN_BANNER: SaasBannerType = {
  id: 'saas_banner',
  title: 'SaaS Application Development Company',
  description:
    "We'll use our expertise and cutting-edge technology to help you build a scalable SaaS product.",
  buttonText: 'Start a project',
  buttonClassName: 'max-w-[208px] w-full justify-center',
  images: [
    {
      id: 3,
      image: formatImgResponse(bannerThreeImage),
      alt: 'Commerce dashboard overview',
      className:
        'z-[-3] absolute bottom-[11%] right-0 w-[53.7%] banner-shadow lg:-bottom-0',
    },
    {
      id: 1,
      image: formatImgResponse(bannerOneImage),
      alt: 'Dashboard overview',
      className:
        'z-[-5] absolute top-0 left-1/2 -translate-x-1/2 w-[54.4%] banner-shadow',
    },
    {
      id: 2,
      image: formatImgResponse(bannerTwoImage),
      alt: 'Monthly earnings graph',
      className:
        'z-[-4] absolute top-[44%] left-0 lg:top-1/2 -translate-y-[33%] -left-[5%] w-[52.5%] banner-shadow lg:top-[50%]',
    },
    {
      id: 4,
      image: formatImgResponse(bannerFourImage),
      alt: 'Analytics graph',
      className:
        'z-[-2] absolute w-[13%] top-[44%] right-[15%] -translate-y-[70%] banner-shadow lg:top-[50%]',
    },
  ],
};
