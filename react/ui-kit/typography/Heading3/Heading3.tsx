import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Heading3: React.FC<TextType> = ({
  title,
  className = '',
  children,
}) => (
  <h3 className={cn('font-medium text-h3-mob text-grey lg:text-h3', className)}>
    {title && title}
    {children && children}
  </h3>
);
