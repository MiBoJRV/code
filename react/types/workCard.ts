import { ImageResponse } from './image';

export type WorkCardType = {
  id: string | number;
  title: string;
  imageOne?: ImageResponse;
  imageTwo?: ImageResponse;
  description: string;
  link: string;
  imageOneClassName?: string;
  imageTwoClassName?: string;
};
