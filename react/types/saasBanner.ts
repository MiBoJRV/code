import { ImageConfigType } from './image';

export type SaasBannerType = {
  id: string;
  title: string;
  description: string;
  buttonText: string;
  buttonClassName?: string;
  images: ImageConfigType[];
};
