import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Heading6: React.FC<TextType> = ({
  fontSize = 'text-h6-mob',
  title,
  className = '',
  children,
}) => (
  <h6 className={cn(`${fontSize} font-medium text-grey`, className)}>
    {title && title}
    {children && children}
  </h6>
);
