import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const FooterLinkText: React.FC<TextType> = ({
  title,
  className = '',
  children,
}) => (
  <h5 className={cn(`font-medium text-grey`, className)}>
    {title && title}
    {children && children}
  </h5>
);
