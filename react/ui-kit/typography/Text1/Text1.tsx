import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const Text1: React.FC<TextType> = ({
  title = '',
  fontSize = 'text-x1-mob',
  fontSizeXs = `xs:${fontSize}`,
  fontSizeLg = 'lg:text-x1',
  fontWeight = 'normal',
  className = '',
  children,
}) => (
  <p
    className={cn(
      className,
      `${fontSize} ${fontSizeXs} font-${fontWeight} text-grey ${fontSizeLg}`
    )}
  >
    {title && title}
    {children && children}
  </p>
);
