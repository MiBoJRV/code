import { ImageResponse } from 'src/types';

export const formatImgResponse = (srcSet?: string) => {
  const src = srcSet?.split(' ')?.[0];

  const image: ImageResponse = {
    srcSet,
    src,
  };

  return image;
};
