import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Text4: React.FC<TextType> = ({
  title = '',
  fontSize = 'text-x4',
  fontSizeLg = 'lg:text-x4',
  className = '',
  children,
}) => (
  <p
    className={cn(`${fontSize} font-normal text-grey ${fontSizeLg}`, className)}
  >
    {title && title}
    {children && children}
  </p>
);
