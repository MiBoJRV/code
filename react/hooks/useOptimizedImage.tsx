import { useEffect, useState } from 'react';
import { ImageResponse } from 'src/types';
import { formatImgResponse } from 'src/helpers';

// TODO name
// type ImageType = {
//   name?: string;
// };

// example for image name: 'src/assets/images/logoImage.png?w=768;1024;2000&format=webp'

export const useOptimizedImage = () => {
  const [image, setImage] = useState<ImageResponse | undefined>(undefined);

  useEffect(() => {
    (async function getImage() {
      // TODO name
      const img = await import(
        'src/assets/images/logoImage.png?w=768;1024;2000&format=webp'
      );
      const image = formatImgResponse(img);
      setImage(image);
    })();
  }, []);

  return { image };
};
