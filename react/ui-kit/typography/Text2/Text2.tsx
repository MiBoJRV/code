import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Text2: React.FC<TextType> = ({
  title = '',
  fontSize = 'x2-mob',
  fontSizeLg = 'x2',
  className = '',
  children,
}) => (
  <p
    className={cn(
      `text-${fontSize} font-normal text-grey lg:text-${fontSizeLg}`,
      className
    )}
  >
    {title && title}
    {children && children}
  </p>
);
