import React from 'react';
import cn from 'classnames';
import { TextType } from 'src/types';

export const EmphasizedText: React.FC<TextType> = ({
  title = '',
  className = '',
}) => (
  <em className={cn('font-medium not-italic text-blue-light', className)}>
    {title}
  </em>
);
