import { ImageConfigType } from 'src/types';
import { formatImgResponse } from 'src/helpers';
import avangaOneImage from 'src/assets/images/avanga_1st_img.png?w=768;1024;2000&format=webp';
import avangaTwoImage from 'src/assets/images/avanga_2nd_img.png?w=768;1024;2000&format=webp';
import avangaThreeImage from 'src/assets/images/avanga_3rd_img.png?w=768;1024;2000&format=webp';

export const AVANGA_IMGS_CONFIG: ImageConfigType[] = [
  {
    id: 3,
    image: formatImgResponse(avangaOneImage),
    alt: 'Avanga chat view',
    className:
      'absolute w-[54%] top-[7%] right-[8%] drop-shadow-blue-30-2 z-[-3] matrix lg:drop-shadow-blue-50',
  },
  {
    id: 1,
    image: formatImgResponse(avangaTwoImage),
    alt: 'Avanga tasks view',
    className:
      'absolute w-[56%] bottom-[23%] left-[29%] drop-shadow-blue-30-2 z-[-4] matrix lg:bottom-[33%] lg:drop-shadow-blue-30',
  },
  {
    id: 2,
    image: formatImgResponse(avangaThreeImage),
    alt: 'Avanga projects view',
    className:
      'absolute w-[50%] top-[30%] left-[10%] drop-shadow-blue-15 z-[-5] matrix lg:top-[24%] lg:drop-shadow-blue-30',
  },
];
