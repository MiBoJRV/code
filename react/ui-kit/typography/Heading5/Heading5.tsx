import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Heading5: React.FC<TextType> = ({
  fontSize = 'text-h5-mob',
  fontSizeXs = `xs:${fontSize}`,
  fontSizeLg = 'lg:text-h5',
  title,
  className = '',
  children,
}) => (
  <h5
    className={cn(
      `${fontSize} font-medium text-grey ${fontSizeXs} ${fontSizeLg}`,
      className
    )}
  >
    {title && title}
    {children && children}
  </h5>
);
