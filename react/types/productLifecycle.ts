import { ImageResponse } from './image';

export type ProductLifecycleType = {
  id?: string | number;
  title: string;
  description: string;
  features: ProductLifecycleFeatureType[];
  caseStudy: CaseCardType;
};
export type ProductLifecycleFeatureType = {
  id: number | string;
  text: string;
};

export type CaseCardType = {
  id: string | number;
  title: string;
  subTitle: string;
  imageOne?: ImageResponse;
  imageTwo?: ImageResponse;
  link: string;
  imageOneClassName?: string;
  imageTwoClassName?: string;
};
