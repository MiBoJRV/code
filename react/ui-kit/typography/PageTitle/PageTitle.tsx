import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const PageTitle: React.FC<TextType> = ({
  title = '',
  className = '',
}) => (
  <h1
    className={cn(
      'font-medium text-title-mob text-grey lg:text-title',
      className
    )}
  >
    {title}
  </h1>
);
