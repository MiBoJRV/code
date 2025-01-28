import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const MenuMain: React.FC<TextType> = ({
  title = '',
  className = '',
}) => (
  <span className={cn('text-menu-mob font-medium lg:text-menu', className)}>
    {title}
  </span>
);
