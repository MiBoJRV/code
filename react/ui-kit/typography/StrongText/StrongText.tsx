import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const StrongText: React.FC<TextType> = ({
  children,
  title,
  className = '',
}) => (
  <strong className={cn('font-medium text-grey', className)}>
    {title && title}
    {children && children}
  </strong>
);
