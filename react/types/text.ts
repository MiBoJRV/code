import React, { ReactNode } from 'react';

export type TextType = {
  title?: string | ReactNode;
  text?: string;
  className?: string;
  children?: React.ReactNode;
  fontSize?: string;
  fontSizeXs?: string;
  fontSizeLg?: string;
  fontWeight?: string;
};
