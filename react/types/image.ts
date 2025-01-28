export type ImageResponse = { srcSet?: string; src?: string };

export type ImageConfigType = {
  id: number;
  image: ImageResponse;
  alt: string;
  className: string;
};
