import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Heading2: React.FC<TextType> = ({
  fontSize = 'text-h3-mob',
  fontSizeLg = 'lg:text-h2',
  title,
  className = '',
  children,
}) => (
  <h2
    className={cn(`${fontSize} font-medium text-grey ${fontSizeLg}`, className)}
  >
    {title && title}
    {children && children}
  </h2>
);
