import { ReactNode } from 'react';
import { ImageResponse } from './image';

export type TestimonialType = {
  id: number | string;
  quote: string;
  client: {
    photo: ImageResponse;
    name: string;
    company: string;
    countryFlag: ImageResponse;
  };
  companyIcon?: ReactNode;
};
