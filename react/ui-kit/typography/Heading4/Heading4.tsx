import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Heading4: React.FC<TextType> = ({
  title,
  fontSize = 'text-h4-sm-mob',
  fontSizeLg = 'lg:text-h4',
  className = '',
  children,
}) => (
  <h4
    className={cn(`${fontSize} font-medium text-grey ${fontSizeLg}`, className)}
  >
    {title && title}
    {children && children}
  </h4>
);
