import React from 'react';
import { MORE_REVIEWS_CONFIG } from './constants';

export const MoreReviews: React.FC = (): JSX.Element => (
  <div className="flex items-center justify-between max-w-xl mx-5 sm:mx-auto h-16">
    {MORE_REVIEWS_CONFIG.map(({ id, link, image, alt, className }) => (
      <a key={id} href={link}>
        <img src={image} alt={alt} className={className} />
      </a>
    ))}
  </div>
);
